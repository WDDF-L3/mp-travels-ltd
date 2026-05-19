<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use App\Models\Job;
use App\Models\JobApplication;

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

    public function applications() {
        $jobs = \App\Models\Job::with(['applications' => function ($query) {
            $query->latest();
        }])->latest()->get();

        return view('admin.applications.index', compact('jobs'));
    }
}