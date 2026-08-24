<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        return view('admin.Testimonial_management.index');
    }

    public function getTestimonials()
    {
        return response()->json(['data' => Testimonial::orderBy('created_at', 'desc')->get()]);
    }

    public function create()
    {
        return view('admin.Testimonial_management.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'nullable|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string',
            'status' => 'required|in:0,1',
        ]);

        Testimonial::create([
            'name' => $request->name,
            'designation' => $request->designation,
            'rating' => $request->rating,
            'comment' => $request->comment,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.testimonial.index')->with('success', 'Testimonial Created Successfully');
    }

    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.Testimonial_management.edit', compact('testimonial'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'nullable|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string',
            'status' => 'required|in:0,1',
        ]);

        $testimonial = Testimonial::findOrFail($id);
        $testimonial->update([
            'name' => $request->name,
            'designation' => $request->designation,
            'rating' => $request->rating,
            'comment' => $request->comment,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.testimonial.index')->with('success', 'Testimonial Updated Successfully');
    }

    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();

        return response()->json(['success' => 'Testimonial deleted successfully!']);
    }
}
