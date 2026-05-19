<?php

namespace App\Http\Controllers;

use App\Mail\JobApplicationSubmitted;
use App\Models\Job;
use App\Models\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class JobApplicationController extends Controller
{
    public function store(Request $request, Job $job)
    {
        $data = $request->validate([
            'name'         => 'required|string|max:255',
            'email'        => 'required|email',
            'phone'        => 'required|string|max:30',
            'cover_letter' => 'required|string',
            'resume'       => 'nullable|file|mimes:pdf,doc,docx|max:4096',
        ]);

        if ($request->hasFile('resume')) {
            $data['resume'] = $request->file('resume')->store('resumes', 'public');
        }

        $data['job_id'] = $job->id;

        $application = JobApplication::create($data);

        
        // Mail::to($application->email)->send(new JobApplicationSubmitted($application));

        return back()->with('success', 'Application submitted successfully.');
    }
}