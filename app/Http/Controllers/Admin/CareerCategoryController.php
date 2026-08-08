<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CareerCategory;
use Illuminate\Http\Request;

class CareerCategoryController extends Controller
{
    public function index()
    {
        return view('admin.career_management.category.index');
    }

    public function getCategory()
    {
        return response()->json(['data' => CareerCategory::all()]);
    }

    public function create()
    {
        return view('admin.career_management.category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:career_categories,name|string|max:255',
            'status' => 'required|boolean',
        ]);

        CareerCategory::create([
            'name' => $request->name,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.career_category.index')->with('success', 'Career Category Created Successfully');
    }

    public function edit($id)
    {
        $category = CareerCategory::findOrFail($id);
        return view('admin.career_management.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:career_categories,name,' . $id,
            'status' => 'required|boolean',
        ]);

        $category = CareerCategory::findOrFail($id);
        $category->update([
            'name' => $request->name,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.career_category.index')->with('success', 'Career Category Updated Successfully');
    }

    public function destroy($id)
    {
        $category = CareerCategory::findOrFail($id);
        $category->delete();

        return response()->json(['success' => 'Career Category deleted successfully!']);
    }
}
