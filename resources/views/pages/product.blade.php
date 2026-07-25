@extends('layouts.app')

@section('title', 'Services')

@push('styles')
    @vite('resources/css/product.css')
@endpush

@section('content')

<!-- Hero -->
<section class="services-hero">
    <div class="container">

        <div class="row justify-content-center text-center">

            <div class="col-lg-8"
                 data-aos="fade-up"
                 data-aos-duration="800">

                <span class="hero-badge">
                    OUR SERVICES
                </span>

                <h1 class="hero-title">
                    Smart Solutions for
                    <span>Modern Wholesale Businesses</span>
                </h1>

                <p class="hero-text">
                    FabricFlow helps wholesalers streamline inventory, simplify
                    order management, optimize warehouse operations, and build
                    stronger customer relationships—all from one intuitive platform.
                </p>

                <div class="hero-buttons">

                    <a href="#services" class="btn btn-primary-custom">
                        Explore Services
                    </a>

                    <a href="{{ route('pricing') }}" class="btn btn-outline-custom">
                        View Pricing
                    </a>

                </div>

            </div>

        </div>

    </div>
</section>

<!-- Inventory Management -->
<section class="service-section" id="services">
    <div class="container">

        <div class="row align-items-center g-5 service-row">

            <!-- Image -->
            <div class="col-lg-6"
                 data-aos="fade-right"
                 data-aos-duration="800">

                <div class="service-image">

                    <img src="{{ asset('images/services/inventory.png') }}"
                         class="img-fluid"
                         alt="Inventory Management">

                </div>

            </div>

            <!-- Content -->
            <div class="col-lg-6"
                 data-aos="fade-left"
                 data-aos-duration="800"
                 data-aos-delay="150">

                <span class="service-label">
                    Inventory Management
                </span>

                <h2 class="service-title">
                    Keep Your Inventory Organized & Always Up to Date
                </h2>

                <p class="service-description">
                    Track inventory in real time, monitor stock availability,
                    eliminate manual errors, and stay ahead with intelligent
                    inventory management built specifically for wholesale businesses.
                </p>

                <div class="service-features">

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        <span>Real-time stock tracking</span>
                    </div>

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        <span>Instant low-stock alerts</span>
                    </div>

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        <span>Bulk inventory management</span>
                    </div>

                </div>

                <a href="{{ route('contact') }}" class="btn btn-primary-custom mt-4">
                    Learn More
                </a>

            </div>

        </div>

    </div>
</section>

@endsection