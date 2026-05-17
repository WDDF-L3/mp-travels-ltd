@extends('layouts.app')

@section('content')

<section class="job-archive-section">
    <div class="container">
        <h2 class="job-page-title">Job Archives</h2>
        <div class="job-search-box">
            <input type="text" placeholder="Keywords">
            <button type="button">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </div>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
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
                    <strong>Location:</strong> {{ $job->location }}
                    <br>
                    <strong>Job Description:</strong>
                    {{ Str::limit(strip_tags($job->description), 180) }}
                </p>
                <div class="job-buttons">
                    <button type="button" class="quick-apply-btn" data-job-id="{{ $job->id }}">
                        QUICK APPLY
                    </button>
                    <a href="{{ route('jobs.show', $job->id) }}">READ MORE</a>
                </div>
            </div>
        @empty
            <div class="alert alert-warning">
                No jobs found.
            </div>
        @endforelse
    </div>
</section>

<!-- Apply Modal Start -->
<div class="apply-modal" id="applyModal">
    <div class="apply-modal-box">
        <button class="apply-close" id="applyClose" type="button">×</button>
        <h2 class="apply-job-title">Apply For This Job</h2>
        <form id="applyForm" action="" method="POST" enctype="multipart/form-data" class="apply-form">
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
                <div class="custom-file-upload">
                    <input type="file" id="resume" name="resume">
                    <label for="resume" class="file-label">
                        <span id="file-name">No file chosen</span>
                        <span class="browse-btn">Browse</span>
                    </label>
                </div>
            </div>
            <button type="submit" class="apply-submit">Submit</button>
        </form>
    </div>
</div>
<!-- Apply Modal End -->

@endsection

@push('scripts')
<script>
document.querySelectorAll('.quick-apply-btn').forEach(function(button) {
    button.addEventListener('click', function() {
        let jobId = this.dataset.jobId;

        const form = document.getElementById('applyForm');
        form.action = '/jobs/' + jobId + '/apply';

        document.getElementById('applyModal').classList.add('active');
        document.body.classList.add('modal-open');
    });
});

const applyClose = document.getElementById('applyClose');
const applyModal = document.getElementById('applyModal');

if (applyClose) {
    applyClose.addEventListener('click', function() {
        applyModal.classList.remove('active');
        document.body.classList.remove('modal-open');
    });
}

if (applyModal) {
    applyModal.addEventListener('click', function(e) {
        if (e.target === applyModal) {
            applyModal.classList.remove('active');
            document.body.classList.remove('modal-open');
        }
    });
}

const resumeInput = document.getElementById("resume");
const fileName = document.getElementById("file-name");

if (resumeInput) {
    resumeInput.addEventListener("change", function () {
        fileName.textContent = this.files.length > 0
            ? this.files[0].name
            : "No file chosen";
    });
}
</script>
@endpush