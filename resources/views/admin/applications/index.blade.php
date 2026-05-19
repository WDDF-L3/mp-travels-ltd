@php
use Illuminate\Support\Facades\Storage;
@endphp

@extends('admin.layouts.app')

@section('content')

<h2 class="mb-4">Job Applications</h2>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

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
                            <th>Applicant</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Cover Letter</th>
                            <th>Resume</th>
                            <th>Date</th>
                            <th width="100">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($job->applications as $key => $application)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $application->name }}</td>
                                <td>{{ $application->email }}</td>
                                <td>{{ $application->phone }}</td>
                                <td style="max-width:300px;">{{ $application->cover_letter }}</td>

                                <td>
                                    @if($application->resume)
                                        <a href="{{ route('admin.applications.resume', $application->id) }}"
                                           class="btn btn-sm btn-primary">
                                            Download
                                        </a>
                                    @else
                                        N/A
                                    @endif
                                </td>

                                <td>{{ $application->created_at->format('d M Y') }}</td>

                                <td>
                                    <form action="{{ route('admin.applications.delete', $application->id) }}"
                                          method="POST"
                                          onsubmit="return confirm('Delete this application?')">
                                        @csrf
                                        @method('DELETE')

                                        <button class="btn btn-sm btn-danger">
                                            Delete
                                        </button>
                                    </form>
                                </td>
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
    <div class="alert alert-warning">No jobs found.</div>
@endforelse

@endsection