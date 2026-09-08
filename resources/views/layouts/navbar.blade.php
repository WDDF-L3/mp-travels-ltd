 <nav class="navbar navbar-expand-lg fixed-top" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('image/LOGO-ALL-03-1.png') }}" alt="MP Travels" class="brand-logo">
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
                        <a class="nav-link dropdown-toggle"
                            href="#"
                            id="recruitmentDropdown"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                                RECRUITMENT & TRAINING
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="recruitmentDropdown">
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

                            <i class="bi bi-translate me-1"></i>
                            <span id="current-language">EN</span>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end language-menu"
                            aria-labelledby="languageDropdown">

                            <li>
                               <a class="dropdown-item language-option"
                                href="#"
                                data-lang="en">
                                    🇬🇧 English
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
        en: 'EN',
        bn: 'BD',
        ja: 'JP'
    };

    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            includedLanguages: 'en,bn,ja',
            autoDisplay: false,
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
        }, 'google_translate_element');

        setTimeout(function () {
            const savedLanguage =
                localStorage.getItem('mp_travels_language');
            if (savedLanguage) {
                updateCurrentLanguage(savedLanguage);
                if (savedLanguage !== 'en') {
                    changeLanguage(savedLanguage);
                }
            }
        }, 1000);

        hideGoogleTranslateUI();
    }

    function hideGoogleTranslateUI() {
        document.querySelectorAll(
            '.goog-te-banner-frame'
        ).forEach(function (element) {
            element.remove();
        });

        document.querySelectorAll(
            'body > .skiptranslate'
        ).forEach(function (element) {
            element.remove();
        });

        document.querySelectorAll(
            '.goog-tooltip'
        ).forEach(function (element) {
            element.style.display = 'none';
        });

        // Google text highlight
        document.querySelectorAll(
            '.goog-text-highlight'
        ).forEach(function (element) {
            element.style.background = 'transparent';
        });

        // Force page position
        document.documentElement.style.top = '0';
        document.documentElement.style.marginTop = '0';

        document.body.style.top = '0';
        document.body.style.marginTop = '0';

        document.documentElement.classList.remove(
            'translated-ltr',
            'translated-rtl'
        );
    }

    const googleTranslateObserver =
        new MutationObserver(function () {
            hideGoogleTranslateUI();
        });

    document.addEventListener(
        'DOMContentLoaded',
        function () {
            googleTranslateObserver.observe(
                document.body,
                {
                    childList: true,
                    subtree: true,
                    attributes: true,
                    attributeFilter: ['style', 'class']
                }
            );
        }
    );

    function changeLanguage(lang) {
        const googleSelect =
            document.querySelector('.goog-te-combo');
        if (!googleSelect) {
            console.warn(
                'Google Translate is not ready yet.'
            );
            return;
        }
        googleSelect.value = lang;
        googleSelect.dispatchEvent(
            new Event('change')
        );

        // Save language
        localStorage.setItem(
            'mp_travels_language',
            lang
        );

        updateCurrentLanguage(lang);
        setTimeout(
            hideGoogleTranslateUI,
            100
        );
        setTimeout(
            hideGoogleTranslateUI,
            500
        );
        setTimeout(
            hideGoogleTranslateUI,
            1000
        );
    }

    function updateCurrentLanguage(lang) {
        const currentLanguage =
            document.getElementById(
                'current-language'
            );

        if (!currentLanguage) return;
        currentLanguage.textContent =
            languageNames[lang] ?? 'EN';
    }

    document.addEventListener(
        'DOMContentLoaded',
        function () {
            const savedLanguage =
                localStorage.getItem(
                    'mp_travels_language'
                );
            if (savedLanguage) {
                updateCurrentLanguage(
                    savedLanguage
                );
            }
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
                            changeLanguage(lang);
                        }
                    );
                });

            // Initial cleanup
            hideGoogleTranslateUI();
        }
    );

</script>
<script
    src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>
@endpush