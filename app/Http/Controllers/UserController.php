<?php

namespace App\Http\Controllers;

use App\DataTables\UsersDataTable;
use App\Events\UserCreated;
use App\Exports\UsersForPromotion;
use App\Imports\UsersImport;
use App\Models\File;
use App\Models\FileTransfer;
use App\Models\GradeLevel;
use App\Models\Office;
use App\Models\Step;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;

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
        return view('dashboard', ['stats' => $stats, 'transfers' => $transfers]);
    }

    public function index(UsersDataTable $dataTable)
    {
        $grade_levels = GradeLevel::all();
        $steps = Step::all();
        return $dataTable->render('users', ['grade_levels' => $grade_levels, 'steps' => $steps]);
    }

    public function import(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|file|mimes:xlsx,xls,csv|max:1024',
            'grade_level' => 'nullable|numeric',
            'step' => 'nullable|numeric'
        ]);
        $file = $request->file('file');
        $data = ['grade_level_id' => $request->grade_level, 'step_id' => $request->step];
        Excel::import(new UsersImport($data), $file);
        return back()->with('success', 'Users imported');
    }

    public function export(Request $request)
    {
        $request->validate([
            'grade_level' => 'required|numeric'
        ]);
        $grade_level = GradeLevel::find($request->grade_level);
        return Excel::download(new UsersForPromotion($request), "DueForPromotionLevel{$grade_level->name}.xlsx");
    }

    public function add()
    {
        $offices = Office::all();
        $grade_levels = GradeLevel::all();
        $steps = Step::all();
        return view('add_user', compact('offices', 'grade_levels', 'steps'));
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
        $grade_levels = GradeLevel::all();
        $steps = Step::all();
        return view('edit_user', compact('user', 'offices', 'grade_levels', 'steps'));
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
        return back()->with('success', 'User updated');
    }

    public function delete($user_id)
    {
        User::where('id', $user_id)->delete();
        return back()->with('success', 'User deleted');
    }
}
