@extends('layouts.app')

@section('content')

<!-- Contact Banner -->
<section class="contact-banner">
    <div class="container text-center">
        <h1>Contact Us</h1>
        <p><a href="{{ route('home') }}">Home</a> » Contact Us</p>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-page-section">
    <div class="container">

        <div class="contact-heading text-center">
            <h2>Get in touch</h2>
            <p>
                We’re here to assist you with all your overseas recruitment and employment needs.
                Whether you have questions, need support, or want to discuss potential partnerships,
                our dedicated team is ready to help.
            </p>
        </div>

        @if(session('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
        @endif

        <div class="row align-items-start g-5">

            <!-- Form -->
            <div class="col-lg-7">
                <form action="{{ route('contact.store') }}" method="POST" class="contact-form">
                    @csrf

                    <div class="mb-4">
                        <label class="form-label">Your Name</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Your Email</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                        @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Subject</label>
                        <input type="text" name="subject" class="form-control" value="{{ old('subject') }}">
                        @error('subject') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Your Message</label>
                        <textarea name="message" class="form-control" rows="7" required>{{ old('message') }}</textarea>
                        @error('message') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <button type="submit" class="contact-submit-btn">Submit</button>
                </form>
            </div>

            <!-- Map -->
            <div class="col-lg-5">
                <div class="contact-map">
                    <iframe
                        src="https://maps.google.com/maps?q=Motijheel%20Dhaka&t=k&z=15&ie=UTF8&iwloc=&output=embed"
                        width="100%"
                        height="420"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy">
                    </iframe>
                </div>
            </div>

        </div>

        <!-- Contact Info Cards -->
        <div class="row contact-info-row g-0">
            <div class="col-lg-4 col-md-6">
                <div class="contact-info-card">
                    <i class="fa-solid fa-map-location-dot"></i>
                    <h4>Visit our office</h4>
                    <div class="info-line"></div>
                    <p>4th floor, 49, Motijheel C/A Shapla Bhaban, Dhaka</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="contact-info-card">
                    <i class="fa-solid fa-envelope-open"></i>
                    <h4>Mail Us</h4>
                    <div class="info-line"></div>
                    <a href="mailto:mptravels@samairagroup.com">mptravels@samairagroup.com</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <div class="contact-info-card">
                    <i class="fa-solid fa-phone-volume"></i>
                    <h4>Call Us</h4>
                    <div class="info-line"></div>
                    <a href="tel:01756221722">017-562-21722</a>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection