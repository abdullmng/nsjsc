<?php

namespace App\Http\Controllers;

use App\Models\Office;
use Illuminate\Http\Request;

class OfficeController extends Controller
{
    public function index()
    {
        $offices = Office::all();
        return view("offices", ['offices' => $offices]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Office::create($request->except('_token'));
        return back()->with('success','Office added');
    }

    public function edit($id)
    {
        $office = Office::find( $id );
        return view('edit_office', ['office'=> $office]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $data = $request->except('_token');
        Office::where('id', $id)->update($data);
        return back()->with('success','updated');
    }

    public function delete($id)
    {
        Office::where('id', $id)->delete();
        return back()->with('success','office deleted');
    }
}
