<?php

namespace App\Http\Controllers;

use App\Models\Job;

class FrontendJobController extends Controller
{
    public function index()
    {
        $jobs = Job::where('status', 1)
            ->latest()
            ->paginate(6);

        return view('frontend.jobs', compact('jobs'));
    }

    public function show(Job $job)
    {
        return view('frontend.job-details', compact('job'));
    }
}