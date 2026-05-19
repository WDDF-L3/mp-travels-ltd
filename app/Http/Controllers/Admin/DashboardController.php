<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use App\Models\Job;
use App\Models\JobApplication;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'totalJobs' => Job::count(),
            'totalApplications' => JobApplication::count(),
            'totalMessages' => ContactMessage::count(),
        ]);
    }

    public function contacts()
    {
        $messages = ContactMessage::latest()->get();
        return view('admin.contacts.index', compact('messages'));
    }

    public function applications()
    {
        $jobs = Job::with(['applications' => function ($query) {
            $query->latest();
        }])->latest()->get();

        return view('admin.applications.index', compact('jobs'));
    }

    public function downloadResume(JobApplication $application) {
        if (!$application->resume) {
            abort(404);
        }

        $filePath = storage_path('app/public/' . $application->resume);

        if (!file_exists($filePath)) {
            abort(404);
        }

        return response()->download($filePath);
    }

    public function deleteApplication(JobApplication $application)
    {
        if ($application->resume && Storage::disk('public')->exists($application->resume)) {
            Storage::disk('public')->delete($application->resume);
        }

        $application->delete();

        return back()->with('success', 'Application deleted successfully.');
    }

    public function deleteContact(ContactMessage $message)
    {
        $message->delete();

        return back()->with('success', 'Contact message deleted successfully.');
    }
}