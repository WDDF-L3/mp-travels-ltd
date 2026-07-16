@extends('admin.layouts.app')

@section('content')

<h2 class="mb-4">Admin Dashboard</h2>

<div class="admin-wrapper">
    

    <main class="admin-main">

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