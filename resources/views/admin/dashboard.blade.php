@extends('admin.layouts.app')

@section('content')

<h2 class="mb-4">Admin Dashboard</h2>

<div class="admin-wrapper">
    {{-- <aside class="sidebar">
        <h3>MP Travels</h3>

        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
        <a href="{{ route('admin.jobs.index') }}">Jobs</a>
        <a href="#">Applications</a>
        <a href="#">Contact Messages</a>
    </aside> --}}

    <main class="admin-main">
        <h2>Admin Dashboard</h2>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="dash-card">
                    <h4>Total Jobs</h4>
                    <h2>{{ $totalJobs ?? 0 }}</h2>
                </div>
            </div>

            <div class="col-md-4">
                <div class="dash-card">
                    <h4>Applications</h4>
                    <h2>{{ $totalApplications ?? 0 }}</h2>
                </div>
            </div>

            <div class="col-md-4">
                <div class="dash-card">
                    <h4>Contact Messages</h4>
                    <h2>{{ $totalMessages ?? 0 }}</h2>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection