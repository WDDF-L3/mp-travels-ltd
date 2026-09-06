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

                    {{-- Language Switcher --}}
                    <li class="nav-item dropdown language-switcher">
                        <a class="nav-link dropdown-toggle"
                        href="#"
                        id="languageDropdown"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false">

                            <i class="fa-solid fa-globe me-1"></i>
                            <span id="current-language">Language</span>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end language-menu"
                            aria-labelledby="languageDropdown">

                            <li>
                                <a class="dropdown-item language-option"
                                href="#"
                                data-lang="en">
                                    EN English
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item language-option"
                                href="#"
                                data-lang="bn">
                                    🇧🇩 বাংলা
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item language-option"
                                href="#"
                                data-lang="ja">
                                    🇯🇵 日本語
                                </a>
                            </li>

                        </ul>
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

    const languageNames = {
        en: 'English',
        bn: 'বাংলা',
        ja: '日本語'
    };

    /* FIX GOOGLE TRANSLATE POSITION */

    function resetGoogleTranslatePosition() {
        document.documentElement.style.top = '0px';
        document.body.style.top = '0px';
        document.body.style.marginTop = '0px';
    }

    /* GOOGLE TRANSLATE INITIALIZE */

    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            includedLanguages: 'en,bn,ja',
            autoDisplay: false
        }, 'google_translate_element');

        setTimeout(
            resetGoogleTranslatePosition,
            500
        );
        setTimeout(
            resetGoogleTranslatePosition,
            1000
        );
        setTimeout(
            resetGoogleTranslatePosition,
            2000
        );

        setTimeout(function () {
            const savedLanguage =
                localStorage.getItem(
                    'mp_travels_language'
                );
            if (
                savedLanguage &&
                savedLanguage !== 'en'
            ) {
                changeLanguage(
                    savedLanguage
                );
            }
        }, 800);
    }

    /* CHANGE LANGUAGE */

    function changeLanguage(lang) {
        const googleSelect =
            document.querySelector(
                '.goog-te-combo'
            );
        if (!googleSelect) {
            console.warn(
                'Google Translate is not ready yet.'
            );
            return;
        }

        /* Google Translate-এর language change */
        googleSelect.value = lang;
        googleSelect.dispatchEvent(
            new Event('change')
        );

        /* Language localStorage-এ save */
        localStorage.setItem(
            'mp_travels_language',
            lang
        );

        /* Navbar-এর language name update */
        const currentLanguage =
            document.getElementById(
                'current-language'
            );
        if (currentLanguage) {
            currentLanguage.textContent =
                languageNames[lang]
                ?? 'English';
        }
        setTimeout(
            resetGoogleTranslatePosition,
            100
        );
        setTimeout(
            resetGoogleTranslatePosition,
            500
        );
    }
    /* PAGE LOAD */
    document.addEventListener(
        'DOMContentLoaded',
        function () {
            const savedLanguage =
                localStorage.getItem(
                    'mp_travels_language'
                );
            const currentLanguage =
                document.getElementById(
                    'current-language'
                );
            if (
                currentLanguage &&
                savedLanguage
            ) {
                currentLanguage.textContent =
                    languageNames[savedLanguage]
                    ?? 'English';
            }
            /* Navbar language buttons */
            document
                .querySelectorAll(
                    '.language-option'
                )
                .forEach(function (option) {
                    option.addEventListener(
                        'click',
                        function (event) {
                            event.preventDefault();
                            const lang =
                                this.dataset.lang;
                            changeLanguage(
                                lang
                            );
                        }
                    );
                });
        }
    );
</script>
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
@endpush