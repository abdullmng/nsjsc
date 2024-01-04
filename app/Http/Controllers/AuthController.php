<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    public function authenticate(Request $request)
    {
        $request->validate(
            [
                'username' => 'required',
                'password' => 'required'
            ]
        );

        $user = User::where('email', $request->username)->orWhere('pf_number', $request->username)->first();
        if ($user)
        {
            if (Hash::check($request->password, $user->password))
            {
                Auth::login($user, $request->remember);
                return redirect()->intended(route('user.dashboard'));
            }
            return back()->withErrors(['username'=> 'Incorrect credentials']);
        }
        return back()->withErrors(['username'=> 'Incorrect credentials']);
    }

    public function forgot()
    {
        return view('auth.forgot');
    }

    public function requestReset(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
                    ? back()->with(['status' => __($status)])
                    : back()->withErrors(['email' => __($status)]);
    }

    public function passwordReset($token)
    {
        return view('auth.reset', ['token' => $token]);
    }

    public function reset(Request $request, $token)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
                    ? redirect()->route('login')->with('status', __($status))
                    : back()->withErrors(['email' => [__($status)]]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
