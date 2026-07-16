 <nav class="navbar navbar-expand-lg fixed-top" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('image/LOGO-ALL-03-1.png') }}" alt="MP Travels" class="site-logo">
            </a>

            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNav">
                <div class="mobile-close d-lg-none">
                    <button class="btn-close-menu" data-bs-toggle="collapse" data-bs-target="#mainNav">
                        ✕ Close
                    </button>
                </div>
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">HOME</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('services') }}">SERVICES</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                            RECRUITMENT & TRAINING
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('recruitment.criteria') }}">Recruitment Criteria</a></li>
                            <li><a class="dropdown-item" href="{{ route('recruitment.process') }}">Recruitment Process</a></li>
                            <li><a class="dropdown-item" href="{{ route('recruitment.categories') }}">Recruitment Categories</a></li>
                            <li><a class="dropdown-item" href="{{ route('training.facilities') }}">Training Facilities</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('jobs.*') ? 'active' : '' }}" href="{{ route('jobs.index') }}">JOBS</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">ABOUT US</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact.*') ? 'active' : '' }}" href="{{ route('contact.index') }}">CONTACT US</a>
                    </li>
                </ul>

                <div class="nav-right-side">
                    <div class="side-contact-number">
                        <div class="d-flex align-items-center">
                            <a href="tel:01756221722" class="me-2 text-decoration-none">
                                <img src="{{ asset('image/phone-150x150.png') }}" alt="phone" class="phone-icon">
                            </a>
                            <div class="contact-info">
                                <a href="tel:01756221722">
                                    017-562-21722
                                </a>
                                <p>We are online 24/7</p>
                            </div>
                        </div>
                    </div>
                    <a href="https://samairagroup.com/" class="btn samaira-btn" target="_blank">
                        SAMAIRA GROUP
                    </a>
                </div>
            </div>
        </div>
    </nav>

@push('scripts')
    <script>
        // navbar scroll fixed js start here
    window.addEventListener("scroll", function () {
    const navbar = document.getElementById("navbar");

    if (window.scrollY > 50) {
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }
});
    </script>
@endpush