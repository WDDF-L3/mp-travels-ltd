@extends('layouts.app')

@section('content')

<section class="job-details-section">
    <div class="container">

        <h2 class="job-details-title">{{ $job->title }}</h2>

        <div class="job-details-top">
            <div class="job-icon">
                <i class="fa-regular fa-building"></i>
            </div>

            <div class="job-date">
                <i class="fa-solid fa-calendar-check"></i>
                <span>Posted {{ $job->created_at->diffForHumans() }}</span>
            </div>
        </div>

        <div class="job-content">
            <p>
                <strong>Location:</strong> {{ $job->location }}
            </p>

            <p>
                <strong>Job Description:</strong><br>
                {!! nl2br(e($job->description)) !!}
            </p>

            @if($job->requirements)
                <p><strong>Requirements:</strong></p>

                <ul>
                    @foreach(explode("\n", $job->requirements) as $requirement)
                        @if(trim($requirement) != '')
                            <li>{{ $requirement }}</li>
                        @endif
                    @endforeach
                </ul>
            @endif
        </div>

        <div class="apply-area">
            <h3>Apply For This Job</h3>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('jobs.apply', $job->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="apply-row">
                    <label>Name<span>*</span></label>
                    <input type="text" name="name" value="{{ old('name') }}" required>
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="apply-row">
                    <label>Email<span>*</span></label>
                    <input type="email" name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="apply-row">
                    <label>Phone<span>*</span></label>
                    <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="01812-345678" required>
                    @error('phone')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="apply-row">
                    <label>Cover Letter<span>*</span></label>
                    <textarea name="cover_letter" required>{{ old('cover_letter') }}</textarea>
                    @error('cover_letter')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
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

                    @error('resume')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <button type="submit" class="apply-submit">Submit</button>
            </form>
        </div>

    </div>
</section>

@endsection

@push('scripts')
<script>
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