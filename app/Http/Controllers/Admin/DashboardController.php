<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\JobApplication;
use App\Models\ContactMessage;

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
}
