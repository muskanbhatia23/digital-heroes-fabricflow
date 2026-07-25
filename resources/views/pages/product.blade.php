@extends('layouts.app')

@section('title', 'Services')

@push('styles')
@vite('resources/css/product.css')
@endpush

@section('content')

{{-- ============================================
     HERO SECTION
============================================ --}}
<section class="services-intro" id="services">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8" data-aos="fade-up" data-aos-duration="800">

                <span class="section-badge">
                    WHAT WE OFFER
                </span>

                <h1 class="section-title">
                    Solutions Designed for
                    <span>Modern Wholesale Businesses</span>
                </h1>

                <p class="section-text">
                    Everything you need to manage inventory, process orders,
                    organize your warehouse, and build stronger customer
                    relationships — from one powerful platform.
                </p>

            </div>
        </div>
    </div>
</section>

{{-- ============================================
     SERVICE 1 — Inventory Management
============================================ --}}
<section class="service-section service-bg-primary">
    <div class="container">
        <div class="service-card" data-aos="fade-up" data-aos-duration="800">
            <div class="row align-items-center g-5">

                {{-- Image --}}
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="service-image">
                        <img src="{{ asset('images/services/inventory.png') }}"
                             class="img-fluid lightbox-trigger"
                             alt="Inventory Management">
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        <a href="{{ route('contact') }}" class="btn btn-primary-custom">
                            Learn More
                        </a>
                    </div>
                </div>

                {{-- Content --}}
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="150">
                    <div class="service-content">

                        <span class="service-label">Inventory Management</span>

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

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

{{-- ============================================
     SERVICE 2 — Order Management
============================================ --}}
<section class="service-section service-bg-light">
    <div class="container">
        <div class="service-card alt" data-aos="fade-up" data-aos-duration="800">
            <div class="row align-items-center g-5">

                {{-- Content --}}
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="service-content">

                        <span class="service-label">Order Management</span>

                        <h2 class="service-title">
                            Manage Every Order From One Smart Dashboard
                        </h2>

                        <p class="service-description">
                            Simplify your wholesale order process from purchase to delivery.
                            Track every order in real time, automate workflows, and keep
                            customers informed at every stage.
                        </p>

                        <div class="service-features">
                            <div class="feature-item">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Real-time order tracking</span>
                            </div>
                            <div class="feature-item">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Automated order processing</span>
                            </div>
                            <div class="feature-item">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Delivery status updates</span>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- Image --}}
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                    <div class="service-image">
                        <img src="{{ asset('images/services/orders.jpg') }}"
                             class="img-fluid lightbox-trigger"
                             alt="Order Management">
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        <a href="{{ route('contact') }}" class="btn btn-primary-custom">
                            Learn More
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

{{-- ============================================
     SERVICE 3 — Warehouse Management
============================================ --}}
<section class="service-section service-bg-primary">
    <div class="container">
        <div class="service-card" data-aos="fade-up" data-aos-duration="800">
            <div class="row align-items-center g-5">

                {{-- Image --}}
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="service-image">
                        <img src="{{ asset('images/services/warehouse.jpg') }}"
                             class="img-fluid lightbox-trigger"
                             alt="Warehouse Management">
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        <a href="{{ route('contact') }}" class="btn btn-primary-custom">
                            Learn More
                        </a>
                    </div>
                </div>

                {{-- Content --}}
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="150">
                    <div class="service-content">

                        <span class="service-label">Warehouse Management</span>

                        <h2 class="service-title">
                            Streamline Your Warehouse Operations End to End
                        </h2>

                        <p class="service-description">
                            Optimize warehouse layout, manage storage zones, track bin
                            locations, and coordinate pick-pack-ship workflows — all from
                            a single intuitive interface designed for speed and accuracy.
                        </p>

                        <div class="service-features">
                            <div class="feature-item">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Zone & bin location mapping</span>
                            </div>
                            <div class="feature-item">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Pick-pack-ship automation</span>
                            </div>
                            <div class="feature-item">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Multi-warehouse support</span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

{{-- ============================================
     SERVICE 4 — Customer Management (CRM)
     Background: Light (#FFF9EE)
     Layout: Content Left | Image Right
============================================ --}}
<section class="service-section service-bg-light">
    <div class="container">
        <div class="service-card alt" data-aos="fade-up" data-aos-duration="800">
            <div class="row align-items-center g-5">

                {{-- Content --}}
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="service-content">

                        <span class="service-label">Customer Management</span>

                        <h2 class="service-title">
                            Build Stronger Relationships With Every Buyer
                        </h2>

                        <p class="service-description">
                            Maintain detailed customer profiles, track purchase history,
                            manage credit limits, and nurture long-term wholesale
                            relationships with a CRM purpose-built for B2B commerce.
                        </p>

                        <div class="service-features">
                            <div class="feature-item">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Detailed buyer profiles</span>
                            </div>
                            <div class="feature-item">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Purchase history & analytics</span>
                            </div>
                            <div class="feature-item">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Credit limit management</span>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- Image --}}
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                    <div class="service-image">
                        <img src="{{ asset('images/services/customers.jpg') }}"
                             class="img-fluid lightbox-trigger"
                             alt="Customer Management">
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        <a href="{{ route('contact') }}" class="btn btn-primary-custom">
                            Learn More
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

{{-- ============================================
     SERVICE 5 — Invoicing & Billing
     Background: Primary (#F8F5ED)
     Layout: Image Left | Content Right
============================================ --}}
<section class="service-section service-bg-primary">
    <div class="container">
        <div class="service-card" data-aos="fade-up" data-aos-duration="800">
            <div class="row align-items-center g-5">

                {{-- Image --}}
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="service-image">
                        <img src="{{ asset('images/services/invoicing.jpg') }}"
                             class="img-fluid lightbox-trigger"
                             alt="Invoicing & Billing">
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        <a href="{{ route('contact') }}" class="btn btn-primary-custom">
                            Learn More
                        </a>
                    </div>
                </div>

                {{-- Content --}}
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="150">
                    <div class="service-content">

                        <span class="service-label">Invoicing & Billing</span>

                        <h2 class="service-title">
                            Generate Professional Invoices in Seconds
                        </h2>

                        <p class="service-description">
                            Create, send, and track invoices effortlessly. Support GST
                            compliance, multiple payment terms, partial payments, and
                            automated reminders — so you get paid faster every time.
                        </p>

                        <div class="service-features">
                            <div class="feature-item">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>GST-compliant invoicing</span>
                            </div>
                            <div class="feature-item">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Automated payment reminders</span>
                            </div>
                            <div class="feature-item">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Partial payment tracking</span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

{{-- ============================================
     SERVICE 6 — Analytics & Reporting
============================================ --}}
<section class="service-section service-bg-light">
    <div class="container">
        <div class="service-card alt" data-aos="fade-up" data-aos-duration="800">
            <div class="row align-items-center g-5">

                {{-- Content --}}
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="service-content">

                        <span class="service-label">Analytics & Reporting</span>

                        <h2 class="service-title">
                            Make Smarter Decisions With Real-Time Insights
                        </h2>

                        <p class="service-description">
                            Visualize sales trends, identify top-performing products,
                            track revenue by region, and generate custom reports — all
                            from a dashboard that turns your data into actionable insights.
                        </p>

                        <div class="service-features">
                            <div class="feature-item">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Visual sales dashboards</span>
                            </div>
                            <div class="feature-item">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Custom report builder</span>
                            </div>
                            <div class="feature-item">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Revenue & trend forecasting</span>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- Image --}}
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                    <div class="service-image">
                        <img src="{{ asset('images/services/analytics.jpg') }}"
                             class="img-fluid lightbox-trigger"
                             alt="Analytics & Reporting">
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        <a href="{{ route('contact') }}" class="btn btn-primary-custom">
                            Learn More
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

{{-- ============================================
     IMAGE LIGHTBOX
============================================ --}}
<div class="image-lightbox" id="imageLightbox">
    <span class="lightbox-close">&times;</span>
    <img id="lightboxImage" src="" alt="Preview">
</div>

@endsection

@push('scripts')
@vite('resources/js/product.js')
@endpush
