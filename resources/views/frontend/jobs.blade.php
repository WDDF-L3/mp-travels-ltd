@extends('layouts.app')

@section('content')

<section class="job-archive-section">
    <div class="container">
        <h2 class="job-page-title">Job Archives</h2>

        <div class="job-search-box">
            <input type="text" placeholder="Keywords">
            <button type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @forelse($jobs as $job)
            <div class="job-card">
                <div class="job-top">
                    <div class="job-left">
                        <div class="job-icon">
                            <i class="fa-regular fa-building"></i>
                        </div>
                        <h3>{{ $job->title }}</h3>
                    </div>

                    <div class="job-date">
                        <i class="fa-solid fa-calendar-check"></i>
                        <span>Posted {{ $job->created_at->diffForHumans() }}</span>
                    </div>
                </div>

                <p>
                    <strong>Location:</strong> {{ $job->location }}<br>
                    <strong>Job Description:</strong>
                    {{ Str::limit(strip_tags($job->description), 180) }}
                </p>

                <div class="job-buttons">
                    <button type="button" class="quick-apply-btn btn btn-success" data-job-id="{{ $job->id }}">
                        QUICK APPLY
                    </button>

                    <a href="{{ route('jobs.show', $job->id) }}">READ MORE</a>
                </div>
            </div>
        @empty
            <div class="alert alert-warning">No jobs found.</div>
        @endforelse
    </div>
        <div class="mt-5">
            {{ $jobs->links() }}
        </div>
</section>

<div class="apply-modal" id="applyModal">
    <div class="apply-modal-box">
        <button class="apply-close" id="applyClose" type="button">×</button>

        <h2 class="apply-job-title">Apply For This Job</h2>

        <form id="applyForm" action="" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="apply-row">
                <label>Name<span>*</span></label>
                <input type="text" name="name" required>
            </div>

            <div class="apply-row">
                <label>Email<span>*</span></label>
                <input type="email" name="email" required>
            </div>

            <div class="apply-row">
                <label>Phone<span>*</span></label>
                <input type="text" name="phone" required>
            </div>

            <div class="apply-row">
                <label>Cover Letter<span>*</span></label>
                <textarea name="cover_letter" rows="5" required></textarea>
            </div>

            <div class="apply-row">
                <label>Attach Resume</label>
                <input type="file" name="resume">
            </div>

            <button type="submit" class="apply-submit">Submit</button>
        </form>
    </div>
</div>

@endsection

@push('scripts')
<script>
document.querySelectorAll('.quick-apply-btn').forEach(function(button) {
    button.addEventListener('click', function() {
        const jobId = this.dataset.jobId;
        document.getElementById('applyForm').action = '/jobs/' + jobId + '/apply';
        document.getElementById('applyModal').classList.add('active');
        document.body.classList.add('modal-open');
    });
});

document.getElementById('applyClose')?.addEventListener('click', function() {
    document.getElementById('applyModal').classList.remove('active');
    document.body.classList.remove('modal-open');
});
</script>
@endpush