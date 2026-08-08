<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CareerCategory;
use App\Models\CareerJob;
use Illuminate\Http\Request;

class CareerJobController extends Controller
{
    public function index()
    {
        return view('admin.career_management.job.index');
    }

    public function getJob()
    {
        $jobs = CareerJob::with('category:id,name')->get();
        return response()->json(['data' => $jobs]);
    }

    public function create()
    {
        $categories = CareerCategory::where('status', 1)->get();
        return view('admin.career_management.job.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'career_category_id' => 'required|exists:career_categories,id',
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'qualification' => 'required|string|max:255',
            'experience' => 'required|string|max:255',
            'salary' => 'nullable|string|max:255',
            'responsibilities' => 'required|string',
            'skills' => 'required|string',
            'status' => 'required|boolean',
        ]);

        CareerJob::create($request->all());

        return redirect()->route('admin.career_job.index')->with('success', 'Job Posting Created Successfully');
    }

    public function edit($id)
    {
        $job = CareerJob::findOrFail($id);
        $categories = CareerCategory::where('status', 1)->get();
        return view('admin.career_management.job.edit', compact('job', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'career_category_id' => 'required|exists:career_categories,id',
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'qualification' => 'required|string|max:255',
            'experience' => 'required|string|max:255',
            'salary' => 'nullable|string|max:255',
            'responsibilities' => 'required|string',
            'skills' => 'required|string',
            'status' => 'required|boolean',
        ]);

        $job = CareerJob::findOrFail($id);
        $job->update($request->all());

        return redirect()->route('admin.career_job.index')->with('success', 'Job Posting Updated Successfully');
    }

    public function destroy($id)
    {
        $job = CareerJob::findOrFail($id);
        $job->delete();

        return response()->json(['success' => 'Job Posting deleted successfully!']);
    }
}
