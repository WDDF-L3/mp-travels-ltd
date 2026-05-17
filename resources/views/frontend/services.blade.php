@extends('layouts.app')

@section('content')

    <section class="page-hero">
        <div class="container">
            <div class="d-flex align-items-center">
                <hr class="new-hr me-4">
                <h1>OUR <span class="text-black">SERVICES</span></h1>
            </div>
        </div>
    </section>

    <!-- service card start here -->
    <section class="section-pad">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="overflow-hidden">
                            <img src="image/service-image-01.jpg"  class="card-img-top">
                        </div>
                        <div class="card-body p-4 shadow">
                            <h4 class="mb-4">Overseas Job Placement</h4>
                            <p class="text-justify">Connecting skilled workers with reputable employers worldwide, ensuring secure and
                                rewarding
                                job opportunities.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="overflow-hidden">
                            <img src="image/service-image-02.jpg"  class="card-img-top">
                        </div>
                        <div class="card-body p-4 shadow">
                            <h4 class="mb-4">Visa Processing Assistance</h4>
                            <p class="text-justify">Providing complete support for visa applications, documentation, and embassy requirements for smooth approval.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="overflow-hidden">
                            <img src="image/service-image-03.jpg" class="card-img-top">
                        </div>
                        <div class="card-body p-4 shadow">
                            <h4 class="mb-4">Air Ticketing & Reservation</h4>
                            <p class="text-justify">Offering competitive airfares and convenient booking options for both domestic and international travel.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="overflow-hidden">
                            <img src="image/service-image-04.jpg" class="card-img-top">
                        </div>
                        <div class="card-body p-4 shadow">
                            <h4 class="mb-4">Manpower Supply Solutions</h4>
                            <p class="text-justify">Supplying qualified manpower across various industries to meet the specific needs of global clients.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="overflow-hidden">
                            <img src="image/service-image-05.jpg" class="card-img-top">
                        </div>
                        <div class="card-body p-4 ps-3 shadow">
                            <h4 class="mb-4">Training & Skill Development</h4>
                            <p class="text-justify">Equipping candidates with industry-relevant skills and knowledge to excel in overseas employment.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="overflow-hidden">
                            <img src="image/service-image-06.jpg" class="card-img-top">
                        </div>
                        <div class="card-body p-4 shadow">
                            <h4 class="mb-4">Immigration Consultation</h4>
                            <p class="text-justify">Guiding clients with expert advice on travel, work permits, and immigration rules for a hassle-free journey.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service card end here  -->

@endsection