@php
use Illuminate\Support\Facades\Storage;
@endphp

@extends('admin.layouts.app')

@section('content')

<h2 class="mb-4">Job Applications</h2>

@forelse($jobs as $job)

    <div class="card border-0 shadow-sm mb-4">
        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">{{ $job->title }}</h5>

            <span class="badge bg-warning text-dark">
                {{ $job->applications->count() }} Applications
            </span>
        </div>

        <div class="card-body table-responsive">

            @if($job->applications->count() > 0)

                <table class="table table-bordered align-middle">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Applicant Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Cover Letter</th>
                            <th>Resume</th>
                            <th>Applied Date</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($job->applications as $key => $application)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $application->name }}</td>
                                <td>{{ $application->email }}</td>
                                <td>{{ $application->phone }}</td>
                                <td style="max-width: 300px;">
                                    {{ $application->cover_letter }}
                                </td>
                                <td>
                                    @if($application->resume)
                                        <a href="{{ Storage::url($application->resume) }}"
                                        target="_blank" class="btn btn-sm btn-primary" download="{{ $application->name }}-resume">
                                            Download Resume
                                        </a>
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td>{{ $application->created_at->format('d M Y') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            @else

                <p class="text-muted mb-0">No applications for this job yet.</p>

            @endif

        </div>
    </div>

@empty

    <div class="alert alert-warning">
        No jobs found.
    </div>

@endforelse

@endsection