@extends('layouts.app')

@section('content')

    <!-- banner start here -->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active slider-1">
                <div class="container h-100 d-flex align-items-center">
                    <div class="row w-100">
                        <div class="col-sm-12">
                            <div class="slider-caption-box">
                                <h1 class="slider-title">Build Your <span class="orange-text">Future</span><br>with
                                    Confidence</h1>
                                <p class="slider-desc">With government-approved licenses and years of experience, MP
                                    Travels
                                    Ltd. ensures your journey abroad begins with trust, support, and proper
                                    documentation.
                                </p>
                                <a href="#" class="btn-learn-more">LEARN MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item slider-2">
                <div class="container h-100 d-flex align-items-center">
                    <div class="row w-100">
                        <div class="col-sm-12">
                            <div class="slider-caption-box">
                                <h1 class="slider-title-2">Your Trusted <span class="orange-text">Gateway</span><br>to
                                    Global Employment</h1>
                                <p class="slider-desc">Providing transparent recruitment and top-notch training
                                    solutions to
                                    secure your dream career worldwide.</p>
                                <a href="#" class="btn-learn-more">LEARN MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item slider-3">
                <div class="container h-100 d-flex align-items-center">
                    <div class="row w-100">
                        <div class="col-sm-12">
                            <div class="slider-caption-box">
                                <h1 class="slider-title-3">End-to-End<br><span class="orange-text">Manpower</span>
                                    Solutions
                                </h1>
                                <p class="slider-desc">From candidate sourcing to final deployment, we offer
                                    comprehensive
                                    recruitment and visa processing services to meet employer and employee needs
                                    seamlessly.
                                </p>
                                <a href="#" class="btn-learn-more">LEARN MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- banner end here -->

    <!-- feature start here -->
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="feature-card reveal">
                    <img src="image/global-network-64x64.png">
                    <h4 class="mt-3">Global Job Placement Expertise and Career Development</h4>
                    <p>Connecting Skilled Workers to Opportunities Worldwide</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card reveal">
                    <img src="image/hands-64x64.png">
                    <h4 class="mt-3">Government Approved & Trusted Agency</h4>
                    <p>Reliable Recruitment Backed by Official Authorization.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card reveal"><img src="image/training-64x64.png">
                    <h4 class="mt-3">Comprehensive Training & Support Services</h4>
                    <p>Preparing Candidates for Success Abroad</p>
                </div>
            </div>
        </div>
    </div>

    <!-- about start here -->
    <section class="section-pad container">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 reveal">
                    <span class="eyebrow">About</span>
                    <h2 class="title display-5">MP TRAVELS LTD.</h2>
                    <p class="text-justify p-5 ps-0 m-3 ms-0">MP Travels Ltd. is a sister concern of Samaira Group and
                        one of the most reputable overseas employment agencies in
                        Bangladesh. We are a fully licensed and authentic recruitment agency, registered in accordance
                        with the laws of the
                        country. Our license is approved by the Ministry of Labor and Employment, Government of
                        Bangladesh. Our government-approved Travel Agent and Recruiting Agent license number is RL-1128.
                    </p>
                    <a class="btn btn-gold" href="{{ route('about') }}">Read more</a>
                </div>
                <div class="col-lg-6 reveal"><img class="img-fluid about-img" src="image/corporate-2-img-1.png"></div>
            </div>
        </div>
    </section>

    <!-- counter start here -->
    <section class="counter-wrap py-5">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-md-3">
                    <div class="counter" data-target="15">0 +</div>
                    <h5>Years of Excellence</h5>
                </div>
                <div class="col-md-3">
                    <div class="counter" data-target="5000">0 +</div>
                    <h5>Happy Clients</h5>
                </div>
                <div class="col-md-3">
                    <div class="counter" data-target="30">0 +</div>
                    <h5>Global Partner Countries</h5>
                </div>
                <div class="col-md-3">
                    <div class="counter" data-target="10000">0 +</div>
                    <h5>Successful Job Placements</h5>
                </div>
            </div>
        </div>
    </section>
    <!-- counter end here -->

    <!-- director message start here -->
    <section class="section-pad md-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-md-6">
                    <div class="text-center">
                        <img src="image/corporate-2-img-2.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="title mb-4">Message From Managing Director</h2>
                    <p class="fw-bold m-0 p-0">Dear Valued Clients, Friends, and Well-wishers,</p>
                    <p class="fw-bold m-0 p-0">Greetings from Bangladesh!</p><br>
                    <p>MP Travels Ltd. is proud to be one of Bangladesh’s leading and most trusted manpower agencies.
                        Since our inception, we
                        have consistently delivered quality, cost-effective, and efficient services, earning the trust
                        of our clients worldwide.
                        Guided by honesty, loyalty, and business integrity, we have expanded our reach across the
                        country, connecting thousands
                        of skilled and unskilled workers to overseas opportunities—significantly reducing unemployment.
                        <br> <br>
                        Our professional approach, targeted training programs, and structured recruitment system ensure
                        candidates are
                        well-prepared to meet global standards. These achievements inspire us to aim even higher for the
                        future.
                        <br><br>
                        Thank you for your continued trust and support.
                        <br><br>
                        <span class="fw-bold">Md. Rafiqul Islam</span><br>
                        Managing Director
                    </p>
                </div>
            </div>

        </div>
    </section>
    <!-- director message end here -->

    <!-- video start here -->
    <section class="container-fluid pt-5 mb-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 reveal">
                    <p class="fs-4">Watch a video</p>
                    <h2 class="title">A short video of <br> MP Travels Ltd.</h2>
                    <p>Take a closer look at MP Travels Ltd., a government-approved overseas recruitment agency
                        committed to connecting talent
                        with international career opportunities. With years of experience, a wide global network, and a
                        strong ethical
                        foundation, we’ve helped thousands turn their dreams into reality.
                </div>
                <div class="col-lg-6 reveal">
                    <div class="video-wrapper shadow">
                        <video
                            data-lazy-load="https://mptravelsltd.com/wp-content/uploads/2025/08/MP-Travels-LTD-video.mp4"
                            playsinline="" muted="" controls=""
                            src="https://mptravelsltd.com/wp-content/uploads/2025/08/MP-Travels-LTD-video.mp4"></video>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- video end here -->


    <!-- article start here -->
    <section class="section-pad articles-section">
        <div class="container">
            <p class="text-center">
                <span class="eyebrow">Our Articles</span>
            </p>
            <h2 class="title mb-4 text-center">Be Aware of All Events</h2>
            <p class="text-center articles-subtitle">
                Connecting skilled workers with trusted employers across the Middle East, Europe, and beyond.
            </p>
            <div class="swiper articleSlider">
                <div class="swiper-wrapper">
                @forelse($articles as $article)
                    <div class="swiper-slide">
                        <div class="article-card">
                            <div class="article-top">
                                <span>
                                    <i class="fa-solid fa-user"></i> {{ $article->author }}
                                </span>
                                <div class="share-box">
                                    <a href="#" class="share-btn">
                                        <i class="fa-solid fa-share-nodes"></i>
                                    </a>
                                    <div class="share-popup">
                                        @if($article->facebook)
                                            <a href="{{ $article->facebook }}" target="_blank">
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </a>
                                        @endif
                                        @if($article->instagram)
                                            <a href="{{ $article->instagram }}" target="_blank">
                                                <i class="fa-brands fa-instagram"></i>
                                            </a>
                                        @endif
                                        @if($article->pinterest)
                                            <a href="{{ $article->pinterest }}" target="_blank">
                                                <i class="fa-brands fa-pinterest-p"></i>
                                            </a>
                                        @endif
                                        @if($article->twitter)
                                            <a href="{{ $article->twitter }}" target="_blank">
                                                <i class="fa-brands fa-x-twitter"></i>
                                            </a>
                                        @endif
                                        @if($article->website)
                                            <a href="{{ $article->website }}" target="_blank">
                                                <i class="fa-solid fa-globe"></i>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <h3>
                                <a href="{{ route('articles.show', $article->slug) }}">
                                    {{ $article->title }}
                                </a>
                            </h3>

                           <div>
                            <img src="{{ asset('uploads/articles/' . $article->image) }}" alt="{{ $article->title }}" class="img-fluid">
                           </div>

                            <div class="article-meta">
                                <a href="#">{{ $article->category }}</a>
                                <span>/</span>
                                <a href="#">{{ $article->created_at->format('d M Y') }}</a>
                            </div>
                            
                            <p>
                                {{ Str::limit($article->description, 120) }}
                            </p>
                            <a class="read-more" href="{{ route('articles.show', $article->slug) }}">
                                CONTINUE READING
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="swiper-slide">
                        <div class="article-card">
                            <h3>No Articles Found</h3>
                            <p>Please add articles from admin dashboard.</p>
                        </div>
                    </div>

                @endforelse

            </div>

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>
    <!-- article end here -->

    <!-- members start here -->
    <section class="member-section">
        <div class="container">
            <div class="row align-items-center mb-3">
                <div class="col-lg-4">
                    <h2 class="member-title">
                        PROUD <br>
                        MEMBER OF
                    </h2>
                </div>
                <div class="col-lg-4">
                    <p class="member-text">
                        <strong>MP Travels Ltd.</strong><br><br>
                        <span>
                            is a proud member of recognized industry bodies,
                            reflecting our commitment to compliance, integrity,
                            and excellence in manpower recruitment.
                        </span>
                    </p>
                </div>

            </div>
            <!-- SLIDER -->
            <div class="swiper memberSlider">
                <div class="swiper-wrapper">
                    <!-- ITEM -->
                    <div class="swiper-slide">
                        <div class="member-logo">
                            <img src="{{ asset('image/iata.png') }}" alt="">
                        </div>
                    </div>
                    <!-- ITEM -->
                    <div class="swiper-slide">
                        <div class="member-logo">
                            <img src="{{ asset('image/ab.png') }}" alt="">
                        </div>
                    </div>
                    <!-- ITEM -->
                    <div class="swiper-slide">
                        <div class="member-logo">
                            <img src="{{ asset('image/atab.png') }}" alt="">
                        </div>
                    </div>
                    <!-- ITEM -->
                    <div class="swiper-slide">
                        <div class="member-logo">
                            <img src="{{ asset('image/dcci.png') }}" alt="">
                        </div>
                    </div>
                    <!-- ITEM -->
                    <div class="swiper-slide">
                        <div class="member-logo">
                            <img src="{{ asset('image/toab.png') }}" alt="">
                        </div>
                    </div>
                    <!-- ITEM -->
                    <div class="swiper-slide">
                        <div class="member-logo">
                            <img src="{{ asset('image/haab.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- members end here -->

@endsection

@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", function () {

    /* Articles Slider */
    if (document.querySelector(".articleSlider")) {
        new Swiper(".articleSlider", {
            slidesPerView: 1,
            spaceBetween: 25,
            loop: true,
            speed: 800,

            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },

            pagination: {
                el: ".articleSlider .swiper-pagination",
                clickable: true,
            },

            navigation: {
                nextEl: ".articleSlider .swiper-button-next",
                prevEl: ".articleSlider .swiper-button-prev",
            },

            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                1200: {
                    slidesPerView: 3,
                }
            }
        });
    }


    /* Member Slider */
    if (document.querySelector(".memberSlider")) {
        new Swiper(".memberSlider", {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            speed: 1000,

            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },

            breakpoints: {
                576: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
                1200: {
                    slidesPerView: 5,
                }
            }
        });
    }

    // counter js start here
    

});
// counter number js start here
document.addEventListener("DOMContentLoaded", function () {
    const counters = document.querySelectorAll('.counter');
    const counterBox = document.querySelector('.counter-wrap');
    let counted = false;

    function runCounters() {
        if (counted || !counterBox) return;

        const boxTop = counterBox.getBoundingClientRect().top;

        if (boxTop > window.innerHeight - 80) return;

        counted = true;

        counters.forEach(function (el) {
            const target = Number(el.getAttribute('data-target'));
            let current = 0;
            const increment = Math.max(1, Math.ceil(target / 90));

            const timer = setInterval(function () {
                current += increment;

                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }

                el.textContent = current.toLocaleString() + ' +';
            }, 25);
        });
    }

    function reveal() {
        document.querySelectorAll('.reveal').forEach(function (el) {
            if (el.getBoundingClientRect().top < window.innerHeight - 80) {
                el.classList.add('show');
            }
        });

        runCounters();
    }

    window.addEventListener('scroll', reveal);
    window.addEventListener('load', reveal);

    reveal();
});
</script>
@endpush