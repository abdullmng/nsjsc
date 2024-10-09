<?php

namespace App\Http\Controllers;

use App\DataTables\StepsDataTable;
use App\Models\Step;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StepController extends Controller
{
    public function index(StepsDataTable $dataTable)
    {
        return $dataTable->render('steps.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'sequence' => 'required|numeric|unique:steps',
        ]);

        $data = $request->except('_token');
        $data['created_by'] = auth()->id();
        $data['updated_by'] = auth()->id();
        Step::create($data);
        return back()->with('success', 'Step created successfully');
    }

    public function edit($id)
    {
        $step = Step::find($id);
        return view('steps.edit', compact('step'));
    }

    public function update(Request $request, $id)
    {
        $step = Step::find($id);
        $request->validate([
            'name' => 'required|string|max:255',
            'sequence' => [
                'required',
                'numeric',
                Rule::unique('steps')->ignore($step->id),
            ],
        ]);

        $data = $request->except('_token');
        $data['updated_by'] = auth()->id();
        $step->update($data);
        return back()->with('success', 'Step updated');
    }

    public function delete($id)
    {
        Step::find($id)->delete();
        return back()->with('success', 'Step deleted');
    }
}
