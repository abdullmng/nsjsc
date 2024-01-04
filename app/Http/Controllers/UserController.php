<?php

namespace App\Http\Controllers;

use App\Events\UserCreated;
use App\Models\File;
use App\Models\FileTransfer;
use App\Models\Office;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function dashboard()
    {
        $stats = [
            'total_files' => File::where('user_id', auth()->id())->count(),
            'sent_files' => FileTransfer::where('sent_by', auth()->id())->count(),
            'received_files' => FileTransfer::where('receiving_office_id', auth()->user()->office_id)->where('sent_to', auth()->id())->count(),
            'acknowledged_files' => FileTransfer::where('acknowledged_by', auth()->id())->count(),
        ];
        $transfers = FileTransfer::where('sent_to', auth()->id())->latest()->limit(3)->get();
        return view('dashboard', ['stats' => $stats,'transfers'=> $transfers]);
    }

    public function index()
    {
        $users = User::all();
        return view('users', ['users' => $users]);
    }

    public function add()
    {
        $offices = Office::all();
        return view('add_user', ['offices'=> $offices]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'surname' => 'required',
            'pf_number' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'office_id' => 'required',
            'role' => 'required',
        ]);


        $password = Str::random(8);
        $data = $request->except('_token');
        $data['password'] = $password;

        $user = User::create($data);
        event(new UserCreated($user, $password));
        return back()->with('success', 'user created');
    }

    public function edit($user_id)
    {
        $user = User::find($user_id);
        $offices = Office::all();
        return view('edit_user', ['user'=> $user, 'offices'=> $offices]);
    }

    public function update(Request $request, $user_id)
    {
        $request->validate([
            'first_name' => 'required',
            'surname' => 'required',
            'pf_number' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'office_id' => 'required',
            'role' => 'required',
        ]);

        $data = $request->except('_token', 'email');
        User::where('id', $user_id)->update($data);
        return back()->with('success','User updated');
    }

    public function delete($user_id)
    {
        User::where('id', $user_id)->delete();
        return back()->with('success','User deleted');
    }
}
