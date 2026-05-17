<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>MP Travels Ltd.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
    <link rel="icon" href="{{ asset('image/LOGO-ALL-03-1.png') }}" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>
    <!-- nav start here -->
    <nav class="navbar navbar-expand-lg fixed-top" id="navbar">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand brand-logo" href="index.html">
                <img src="image/LOGO-ALL-03-1.png" alt="logo">
            </a>
            <!-- Toggle Button -->
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Mobile Overlay -->
            <div class="mobile-overlay"></div>
            <!-- Navbar Menu -->
            <div class="collapse navbar-collapse" id="mainNav">
                <!-- Close Button Mobile -->
                <div class="mobile-close d-lg-none">
                    <button class="btn-close-menu" data-bs-toggle="collapse" data-bs-target="#mainNav">
                        ✕ Close
                    </button>
                </div>
                <!-- Menu -->
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.html">Services</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="recruitmentDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Recruitment & Training
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="recruitment-criteria.html">
                                    Recruitment Criteria
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="recruitment-process.html">
                                    Recruitment Process
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="recruitment-categories.html">
                                    Recruitment Categories
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="training-facilities.html">
                                    Training Facilities
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="jobs.html">Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                    </li>
                </ul>
                <!-- Right Side -->
                <div class="nav-right-side">
                    <div class="side-contact-number">
                        <div class="d-flex align-items-center">
                            <a href="tel:01756221722" class="me-2 text-decoration-none">
                                <img src="image/phone-150x150.png" alt="phone" class="phone-icon">
                            </a>
                            <div class="contact-info">
                                <a href="tel:01756221722">
                                    017-562-21722
                                </a>
                                <p>We are online 24/7</p>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn samaira-btn">
                        SAMAIRA GROUP
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <!-- nav end here  -->