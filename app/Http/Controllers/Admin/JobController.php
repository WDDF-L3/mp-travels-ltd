<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::latest()->get();

        return view('admin.jobs.index', compact('jobs'));
    }

    public function create()
    {
        return view('admin.jobs.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'        => 'required|string|max:255',
            'location'     => 'required|string|max:255',
            'description'  => 'required|string',
            'requirements' => 'nullable|string',
            'status'       => 'required|in:0,1',
        ]);

        Job::create($data);

        return redirect()
            ->route('admin.jobs.index')
            ->with('success', 'Job created successfully.');
    }

    public function show(Job $job)
    {
        return redirect()->route('admin.jobs.edit', $job->id);
    }

    public function edit(Job $job)
    {
        return view('admin.jobs.edit', compact('job'));
    }

    public function update(Request $request, Job $job)
    {
        $data = $request->validate([
            'title'        => 'required|string|max:255',
            'location'     => 'required|string|max:255',
            'description'  => 'required|string',
            'requirements' => 'nullable|string',
            'status'       => 'required|in:0,1',
        ]);

        $job->update($data);

        return redirect()
            ->route('admin.jobs.index')
            ->with('success', 'Job updated successfully.');
    }

    public function destroy(Job $job)
    {
        $job->delete();

        return redirect()
            ->route('admin.jobs.index')
            ->with('success', 'Job deleted successfully.');
    }
}