<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CareerApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CareerApplicationController extends Controller
{
    public function index()
    {
        return view('admin.career_management.application.index');
    }

    public function getApplication()
    {
        $applications = CareerApplication::with('category:id,name')->latest()->get();
        return response()->json(['data' => $applications]);
    }

    public function downloadResume($id)
    {
        $application = CareerApplication::findOrFail($id);
        $filePath = public_path($application->resume);

        if (File::exists($filePath)) {
            return response()->download($filePath);
        }

        return redirect()->back()->with('error', 'Resume file not found on server.');
    }

    public function destroy($id)
    {
        $application = CareerApplication::findOrFail($id);
        $filePath = public_path($application->resume);

        if (File::exists($filePath)) {
            File::delete($filePath);
        }

        $application->delete();

        return response()->json(['success' => 'Application deleted successfully!']);
    }
}
