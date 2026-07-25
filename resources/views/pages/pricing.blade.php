@extends('layouts.app')

@push('styles')
@vite('resources/css/pricing.css')
@endpush

@push('scripts')
@vite('resources/js/pricing.js')
@endpush

@section('title', 'Pricing | FabricFlow')

@section('content')

<div class="pricing-page">

    {{-- ================= Hero ================= --}}
    <section class="pricing-hero">

        <div class="container">

            <div class="hero-content text-center" data-aos="fade-up">

                <span class="section-badge">
                    PRICING
                </span>

                <h1 class="pricing-title mt-3">
                    Flexible Pricing for Every
                    <span>Wholesale Business</span>
                </h1>

                <p class="pricing-description mt-3">
                    Start with the plan that fits your business today and upgrade anytime as you grow.
                </p>

                <div class="pricing-controls d-flex justify-content-center align-items-center flex-wrap gap-4 mt-4">

                    {{-- Monthly / Yearly Toggle --}}
                    <div class="pricing-toggle d-flex align-items-center">

                        <span id="monthlyLabel" class="active">
                            Monthly
                        </span>

                        <label class="switch mx-3">

                            <input type="checkbox" id="pricingSwitch">

                            <span class="slider"></span>

                        </label>

                        <span id="yearlyLabel">
                            Yearly
                        </span>

                        <span class="save-badge ms-3">
                            Save 20%
                        </span>

                    </div>

                    {{-- Currency Toggle --}}
                    <div>

                        <select id="currencySelect" class="form-select currency-select">

                            <option value="INR" selected>
                                ₹ INR
                            </option>

                            <option value="USD">
                                $ USD
                            </option>

                        </select>

                    </div>

                </div>

            </div>

        </div>

    </section>

    {{-- ================= Pricing Cards ================= --}}
    <section class="pricing-section py-5">

        <div class="container">

            <div class="row g-4 justify-content-center">

                {{-- Starter --}}
                <div class="col-lg-4" data-aos="fade-up">

                    <div class="pricing-card h-100">

                        <h5>Starter</h5>

                        <p class="plan-description">
                            Perfect for small wholesalers and startups.
                        </p>

                        <div class="price mb-4">

                            <span id="starterCurrency">₹</span>

                            <span id="starterPrice">999</span>

                            <span class="duration">/month</span>

                        </div>

                        <ul class="pricing-features">

                            <li><i class="bi bi-check-circle-fill"></i> Dashboard Overview</li>
                            <li><i class="bi bi-check-circle-fill"></i> Up to 100 Products</li>
                            <li><i class="bi bi-check-circle-fill"></i> Inventory Tracking</li>
                            <li><i class="bi bi-check-circle-fill"></i> Order Management</li>
                            <li><i class="bi bi-check-circle-fill"></i> Customer Management</li>
                            <li><i class="bi bi-check-circle-fill"></i> 1 Team Member</li>

                        </ul>

                        <a href="{{ route('contact') }}" class="btn btn-outline-custom w-100 mt-4">
                            Get Started
                        </a>

                    </div>

                </div>

                {{-- Growth --}}
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="150">

                    <div class="pricing-card featured h-100">

                        <div class="popular-badge">
                            Most Popular
                        </div>

                        <h5>Growth</h5>

                        <p class="plan-description">
                            Best for growing wholesale businesses.
                        </p>

                        <div class="price mb-4">

                            <span id="growthCurrency">₹</span>

                            <span id="growthPrice">2499</span>

                            <span class="duration">/month</span>

                        </div>

                        <ul class="pricing-features">

                            <li><i class="bi bi-check-circle-fill"></i> Everything in Starter</li>
                            <li><i class="bi bi-check-circle-fill"></i> Unlimited Products</li>
                            <li><i class="bi bi-check-circle-fill"></i> Advanced Inventory</li>
                            <li><i class="bi bi-check-circle-fill"></i> Reports & Analytics</li>
                            <li><i class="bi bi-check-circle-fill"></i> Priority Support</li>
                            <li><i class="bi bi-check-circle-fill"></i> 3 Team Members</li>

                        </ul>

                        <a href="{{ route('contact') }}" class="btn btn-primary-custom w-100 mt-4">
                            Start Free Trial
                        </a>

                    </div>

                </div>

                {{-- Enterprise --}}
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">

                    <div class="pricing-card h-100">

                        <h5>Enterprise</h5>

                        <p class="plan-description">
                            Tailored solutions for large manufacturers and distributors.
                        </p>

                        <div class="price mb-4">

                            <span id="enterprisePrice">
                                Custom
                            </span>

                        </div>

                        <ul class="pricing-features">

                            <li><i class="bi bi-check-circle-fill"></i> Everything in Growth</li>
                            <li><i class="bi bi-check-circle-fill"></i> Multi-Warehouse Support</li>
                            <li><i class="bi bi-check-circle-fill"></i> API Access</li>
                            <li><i class="bi bi-check-circle-fill"></i> Dedicated Account Manager</li>
                            <li><i class="bi bi-check-circle-fill"></i> 24/7 Premium Support</li>
                            <li><i class="bi bi-check-circle-fill"></i> Unlimited Team Members</li>

                        </ul>

                        <a href="{{ route('contact') }}" class="btn btn-outline-custom w-100 mt-4">
                            Contact Sales
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>

    {{-- ================= Comparison Table ================= --}}
    <section class="comparison-section py-5">

        <div class="container">

            <div class="text-center mb-5" data-aos="fade-up">

                <span class="section-badge">
                    FEATURE COMPARISON
                </span>

                <h2 class="mt-3">
                    Compare Plans
                </h2>

            </div>

            <div class="table-responsive" data-aos="fade-up">

                <table class="table comparison-table">

                    <thead>
                        <tr>
                            <th>Feature</th>
                            <th>Starter</th>
                            <th>Growth</th>
                            <th>Enterprise</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>Dashboard</td>
                            <td><i class="bi bi-check-circle-fill"></i></td>
                            <td><i class="bi bi-check-circle-fill"></i></td>
                            <td><i class="bi bi-check-circle-fill"></i></td>
                        </tr>
                        <tr>
                            <td>Products</td>
                            <td>100</td>
                            <td>Unlimited</td>
                            <td>Unlimited</td>
                        </tr>
                        <tr>
                            <td>Inventory</td>
                            <td>Basic</td>
                            <td>Advanced</td>
                            <td>Advanced</td>
                        </tr>
                        <tr>
                            <td>Orders</td>
                            <td>✓</td>
                            <td>✓</td>
                            <td>✓</td>
                        </tr>
                        <tr>
                            <td>Customers</td>
                            <td>✓</td>
                            <td>✓</td>
                            <td>✓</td>
                        </tr>
                        <tr>
                            <td>Reports</td>
                            <td>Basic</td>
                            <td>Advanced</td>
                            <td>Advanced</td>
                        </tr>
                        <tr>
                            <td>Team Members</td>
                            <td>1</td>
                            <td>10</td>
                            <td>Unlimited</td>
                        </tr>
                        <tr>
                            <td>API Access</td>
                            <td>—</td>
                            <td>—</td>
                            <td>✓</td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </section>

    {{-- ================= FAQ ================= --}}
<section class="faq-section py-5">

    <div class="container">

        <div class="text-center mb-5">
            <span class="section-badge">FAQ</span>

            <h2 class="mt-3">
                Frequently Asked Questions
            </h2>

            <p class="text-muted">
                Everything you need to know about FabricFlow.
            </p>
        </div>

        <div class="row align-items-center g-5">

            <!-- Left Video -->
             <div class="col-lg-5 text-center">

    <video
        class="faq-video"
        autoplay
        muted
        loop
        playsinline>

        <source src="{{ asset('videos/faq2.mp4') }}" type="video/mp4">

        Your browser does not support the video tag.

    </video>

</div>

            <!-- Right Accordion -->
            <div class="col-lg-7">

                <div class="accordion" id="pricingFaq">

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                Is there a free trial?
                            </button>
                        </h2>

                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#pricingFaq">
                            <div class="accordion-body">
                                Yes, every plan includes a 14-day free trial with no credit card required.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mt-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq2">
                                Can I upgrade my plan later?
                            </button>
                        </h2>

                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#pricingFaq">
                            <div class="accordion-body">
                                Yes. You can upgrade or downgrade your subscription anytime.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mt-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq3">
                                Is my data secure?
                            </button>
                        </h2>

                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#pricingFaq">
                            <div class="accordion-body">
                                Absolutely. We use encrypted connections and secure cloud storage.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mt-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq4">
                                What payment methods are accepted?
                            </button>
                        </h2>

                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#pricingFaq">
                            <div class="accordion-body">
                                We accept credit cards, debit cards, UPI and bank transfers.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mt-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq5">
                                Do you offer customer support?
                            </button>
                        </h2>

                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#pricingFaq">
                            <div class="accordion-body">
                                Yes. All plans include support, while Growth and Enterprise receive priority assistance.
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


</div>



@endsection