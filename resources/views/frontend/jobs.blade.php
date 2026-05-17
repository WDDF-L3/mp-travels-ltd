@extends('layouts.app')

@section('content')

<!-- job archive start -->
    <section class="job-archive-section mt-5">
        <div class="container">

            <h2 class="job-page-title">Job Archives</h2>

            <!-- search box -->
            <div class="job-search-box">
                <input type="text" placeholder="Keywords">
                <button type="button">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>

            <!-- job item -->
            @foreach($jobs as $job)
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
                        Location: {{ $job->location }} <br>
                        {{ Str::limit(strip_tags($job->description), 150) }}
                    </p>

                    <div class="job-buttons">
                        <button type="button" class="quick-apply-btn" data-job-id="{{ $job->id }}">
                            QUICK APPLY
                        </button>

                        <a href="{{ route('jobs.show', $job->id) }}">READ MORE</a>
                    </div>
                </div>
            @endforeach

            {{-- <div class="job-card">
                <div class="job-top">
                    <div class="job-left">
                        <div class="job-icon">
                            <i class="fa-regular fa-building"></i>
                        </div>

                        <h3>Factory Worker</h3>
                    </div>

                    <div class="job-date">
                        <i class="fa-solid fa-calendar-check"></i>
                        <span>Posted 9 months ago</span>
                    </div>
                </div>

                <p>
                    Location: Warsaw, PolandJob Description:Our manufacturing plant in Warsaw
                    is seeking factory workers to join the production line. Responsibilities include machine
                </p>

                <div class="job-buttons">
                    <a href="#" class="quick-apply-btn">QUICK APPLY</a>
                    <a href="job-read-mode.html" class="read-more-btn">READ MORE</a>
                </div>
            </div>

            <div class="job-card">
                <div class="job-top">
                    <div class="job-left">
                        <div class="job-icon">
                            <i class="fa-regular fa-building"></i>
                        </div>

                        <h3>Construction Laborer</h3>
                    </div>

                    <div class="job-date">
                        <i class="fa-solid fa-calendar-check"></i>
                        <span>Posted 9 months ago</span>
                    </div>
                </div>

                <p>
                    Location: Doha, QatarJob Description:We are hiring construction laborers to
                    assist with building projects across Doha. Tasks include site cleaning, material
                </p>

                <div class="job-buttons">
                    <a href="#" class="quick-apply-btn">QUICK APPLY</a>
                    <a href="job-read-mode.html">READ MORE</a>
                </div>
            </div>

            <div class="job-card">
                <div class="job-top">
                    <div class="job-left">
                        <div class="job-icon">
                            <i class="fa-regular fa-building"></i>
                        </div>

                        <h3>Warehouse Assistant</h3>
                    </div>

                    <div class="job-date">
                        <i class="fa-solid fa-calendar-check"></i>
                        <span>Posted 9 months ago</span>
                    </div>
                </div>

                <p>
                    Location: Riyadh, Saudi ArabiaJob Description:Join our logistics team as a
                    Warehouse Assistant in Riyadh. Duties include loading and unloading goods,
                </p>

                <div class="job-buttons">
                    <a href="#" class="quick-apply-btn">QUICK APPLY</a>
                    <a href="job-read-mode.html" class="read-more-btn">READ MORE</a>
                </div>
            </div>

            <div class="job-card">
                <div class="job-top">
                    <div class="job-left">
                        <div class="job-icon">
                            <i class="fa-regular fa-building"></i>
                        </div>

                        <h3>Factory Worker</h3>
                    </div>

                    <div class="job-date">
                        <i class="fa-solid fa-calendar-check"></i>
                        <span>Posted 9 months ago</span>
                    </div>
                </div>

                <p>
                    Location: Dubai, United Arab EmiratesJob Description:We are looking for
                    reliable and hardworking factory workers to join our manufacturing team in
                </p>

                <div class="job-buttons">
                    <a href="#" class="quick-apply-btn">QUICK APPLY</a>
                    <a href="job-read-mode.html" class="read-more-btn">READ MORE</a>
                </div>
            </div> --}}

        </div>
    </section>
    <!-- job archive end -->

    <!-- Apply Modal Start -->
    <div class="apply-modal" id="applyModal">
        <div class="apply-modal-box">

            <button class="apply-close" id="applyClose">×</button>

            <h2 class="apply-job-title">Packaging Operator</h2>

            <div class="apply-job-info">
                <div class="job-icon">
                    <i class="fa-regular fa-building"></i>
                </div>

                <div class="apply-date">
                    <i class="fa-solid fa-calendar-check"></i>
                    <span>Posted 9 months ago</span>
                </div>
            </div>

            <div class="apply-details">
                <p><strong>Location:</strong> Berlin, Germany</p>

                <p>
                    <strong>Job Description:</strong><br>
                    We are recruiting packaging operators for our food production factory in Berlin.
                    The role involves packing products according to specifications, labeling,
                    and ensuring cleanliness.
                </p>

                <p><strong>Requirements:</strong></p>

                <ul>
                    <li>Ability to follow instructions carefully</li>
                    <li>Willingness to work in shifts</li>
                    <li>Basic German language skills are an advantage</li>
                </ul>
            </div>

            <h3 class="apply-form-title">Apply For This Job</h3>

            <form id="applyForm" action="" method="POST" enctype="multipart/form-data">
                @csrf

                <input type="text" name="name" required>
                <input type="email" name="email" required>
                <input type="text" name="phone" required>
                <textarea name="cover_letter" required></textarea>
                <input type="file" name="resume">

                <button type="submit">Submit</button>
            </form>

        </div>
    </div>
    <!-- Apply Modal End -->

    </script>

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
</script>
@endpush