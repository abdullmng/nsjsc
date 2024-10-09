<?php

namespace App\Http\Controllers;

use App\DataTables\GradeLevelsDataTable;
use App\Models\GradeLevel;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class GradeLevelController extends Controller
{
    public function index(GradeLevelsDataTable $dataTable)
    {
        return $dataTable->render('grade_levels.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'sequence' => 'required|numeric|unique:grade_levels',
            'years_to_promote' => 'required|numeric|max:5'
        ]);

        $data = $request->except('_token');
        $data['created_by'] = auth()->id();
        $data['updated_by'] = auth()->id();
        GradeLevel::create($data);
        return back()->with('success', 'Grade Level created successfully');
    }

    public function edit($id)
    {
        $gradeLevel = GradeLevel::find($id);
        return view('grade_levels.edit', compact('gradeLevel'));
    }

    public function update(Request $request, $id)
    {
        $gradeLevel = GradeLevel::find($id);
        $request->validate([
            'name' => 'required|string|max:255',
            'sequence' => [
                'required',
                'numeric',
                Rule::unique('grade_levels')->ignore($gradeLevel->id),
            ],
            'years_to_promote' => 'required|numeric|max:5'
        ]);

        $data = $request->except('_token');
        $data['updated_by'] = auth()->id();
        $gradeLevel->update($data);
        return back()->with('success', 'Grade Level updated');
    }

    public function delete($id)
    {
        GradeLevel::find($id)->delete();
        return back()->with('success', 'Grade Level deleted');
    }
}
