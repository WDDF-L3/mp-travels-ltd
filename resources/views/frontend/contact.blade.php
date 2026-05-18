@extends('layouts.app')

@section('content')

<section class="contact-title bg-black text-white position-relative">
        <div class="container text-center">
            <div class="position-absolute top-50 start-50 translate-middle">
                <h1>Contact Us</h1>
                <p><a href="{{ route('home') }}" class="text-decoration-none text-white home-hover">Home</a> » Contact Us</p>
            </div>
        </div>
    </section>

<section class="contact-page-section">
    <div class="container">

        <div class="text-center my-5">
                <h2 class="title">Get in touch</h2>
                <p class="px-5 mx-5">We’re here to assist you with all your overseas recruitment and employment needs.
                    Whether you
                    have questions, need support, or want to discuss potential partnerships, our dedicated team is
                    ready to help.
                </p>
            </div>

        @if(session('success'))
            <div class="alert alert-success text-center">{{ session('success') }}</div>
        @endif

        <div class="row align-items-start g-5">
            <div class="col-lg-7">
                <form action="{{ route('contact.store') }}" method="POST" class="contact-form">
                    @csrf

                    <div class="mb-4">
                        <label class="form-label">Your Name</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Your Email</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Subject</label>
                        <input type="text" name="subject" class="form-control" value="{{ old('subject') }}">
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Your Message</label>
                        <textarea name="message" class="form-control" rows="7" required>{{ old('message') }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-outline-info w-50">Submit</button>
                </form>
            </div>

            <div class="col-lg-5">
                <div class="overflow-hidden">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d6192.434815812526!2d90.419334!3d23.723103!3m2!1i1024!2i768!4f13.1!2m1!1s4th%20floor%2C%2049%2C%20Motijheel%20C%2FA%20Shapla%20Bhaban%2C%20Dhaka%201000!5e1!3m2!1sen!2sus!4v1778475489356!5m2!1sen!2sus"
                            width="500" height="450" style="border:0;" allowfullscreen=""
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
            </div>
        </div>

    </div>
</section>

<section class="mt-5">
        <div class="contact-hover">
            <div class="container mb-4">
                <div class="row g-5 text-center">
                    <div class="col-md-4 shadow py-5">
                        
                        <h5><i class="fa-solid fa-map-location contact-icon"></i> Visit our office</h5>
                        <hr class="contact-hr">
                        <p class="mt-3">4th floor, 49, Motijheel C/A Shapla Bhaban, Dhaka</p>
                    </div>
                    <div class="col-md-4 shadow py-5">
                        
                        <h5><i class="fa-solid fa-envelope-open contact-icon"></i> Mail Us</h5>
                        <hr class="contact-hr">
                        <a href="mailto:mptravels@samairagroup.com" class="text-decoration-none text-black d-block mt-3">mptravels@samairagroup.com</a>
                    </div>
                    <div class="col-md-4 shadow py-5">
                        
                        <h5><i class="fa-solid fa-phone-volume contact-icon"></i> Call Us</h5>
                        <hr class="contact-hr">
                        <a href="tel: 01756221722" class="text-decoration-none text-black d-block mt-3">017-562-21722</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection