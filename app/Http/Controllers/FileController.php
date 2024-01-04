<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as FacadesFile;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function index()
    {
        $files = File::where('user_id', auth()->id())->get();
        return view('files', ['files' => $files]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'file' => 'required'
        ]);

        $data = $request->except('_token', 'file');
        $data['user_id'] = auth()->id();
        $uploaded_file = $request->file('file')->store('public/uploads');
        $path = Storage::url($uploaded_file);
        $data['path'] = $path;

        $file = File::create($data);
        return back()->with('success','File uploaded');
    }

    public function delete($id)
    {
        $file = File::where('id', $id)->first();
        $doc = str_replace('/storage/uploads/', '', $file->path);
        $path = storage_path('app/public/uploads/'. $doc);

        if (FacadesFile::exists($path)) {
            FacadesFile::delete($path);
        }
        $file->delete();
        return back()->with('success','File Deleted!');
    }
}
