@extends('layouts.app')

@push('styles')
@vite('resources/css/contact.css')
@endpush

@push('scripts')
@vite('resources/js/contact.js')
@endpush

@section('title','Contact | FabricFlow')

@section('content')

<div class="contact-page">

    <!-- ================= Hero ================= -->
    <section class="contact-hero">

        <div class="container">

            <div class="row align-items-center g-5">

                <div class="col-lg-6" data-aos="fade-right">

                    <span class="contact-badge">
                        CONTACT US
                    </span>

                    <h1 class="contact-title mt-4">
                        We'd Love to
                        Hear From You
                    </h1>

                    <p class="contact-description mt-4">

                        Whether you have questions about FabricFlow,
                        need help getting started, or want to see how
                        our platform can simplify your wholesale
                        business, our team is ready to help.

                    </p>

                    <div class="hero-buttons mt-5">

                        <a href="#contact-form" class="btn btn-primary-custom">

                            Contact Sales

                        </a>

                        <a href="#faq" class="btn btn-outline-custom">

                            Learn More

                        </a>

                    </div>

                    <div class="hero-stats mt-5">

                        <div class="stat-box">

                            <h3>24h</h3>

                            <p>Average Response</p>

                        </div>

                        <div class="stat-box">

                            <h3>500+</h3>

                            <p>Businesses Served</p>

                        </div>

                        <div class="stat-box">

                            <h3>99%</h3>

                            <p>Customer Satisfaction</p>

                        </div>

                    </div>

                </div>

                <div class="col-lg-6" data-aos="fade-left">


                    <img src="{{ asset('images/contact-illustration.png') }}" alt="Contact Illustration"
                        class="img-fluid contact-hero-image">

                </div>

            </div>

        </div>

    </section>

    <!-- ================= Contact Form ================= -->

    <section id="contact-form" class="contact-section">

        <div class="container">

            <div class="row g-5">

                <div class="col-lg-8">

                    <div class="contact-form-card">

                        <div class="section-header">

                            <span class="section-badge">
                                GET IN TOUCH
                            </span>

                            <h2 class="mt-3">
                                Send us a Message
                            </h2>

                            <p>

                                Fill in your details below and we'll
                                get back to you as soon as possible.

                            </p>

                        </div>

                        <form id="contactForm">

                            <div class="row">

                                <div class="col-md-6 mb-4">

                                    <label class="form-label">
                                        Full Name
                                    </label>

                                    <input type="text" class="form-control contact-input" placeholder="John Doe"
                                        required>

                                </div>

                                <div class="col-md-6 mb-4">

                                    <label class="form-label">
                                        Company Name
                                    </label>

                                    <input type="text" class="form-control contact-input" placeholder="ABC Textiles"
                                        required>

                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-6 mb-4">

                                    <label class="form-label">
                                        Email Address
                                    </label>

                                    <input type="email" class="form-control contact-input"
                                        placeholder="john@example.com" required>

                                </div>

                                <div class="col-md-6 mb-4">

                                    <label class="form-label">
                                        Phone Number
                                    </label>

                                    <input type="tel" class="form-control contact-input" placeholder="9876543210"
                                        pattern="[0-9]{10}" maxlength="10" minlength="10" inputmode="numeric"
                                        oninput="this.value=this.value.replace(/[^0-9]/g,'')" required>

                                </div>

                            </div>

                            <div class="mb-4">

                                <label class="form-label">
                                    Message
                                </label>

                                <textarea rows="4" class="form-control contact-input"
                                    placeholder="Tell us about your requirements..." required></textarea>
                            </div>

                            <button type="submit" class="btn btn-submit-contact">

                                <span class="btn-text">
                                    Send Message
                                </span>

                                <i class="bi bi-arrow-right ms-2"></i>

                            </button>

                        </form>

                    </div>

                </div>

                <!-- Contact Info -->

                <div class="col-lg-4">

                    <div class="contact-info-wrapper">

                        <div class="info-card">

                            <div class="info-icon">
                                <i class="bi bi-telephone-fill"></i>
                            </div>

                            <div>

                                <h5>Call Us</h5>

                                <p>+91 79861 37043</p>

                            </div>

                        </div>

                        <div class="info-card">

                            <div class="info-icon">
                                <i class="bi bi-envelope-fill"></i>
                            </div>

                            <div>

                                <h5>Email</h5>

                                <p>support@fabricflow.com</p>

                            </div>

                        </div>

                        <div class="info-card">

                            <div class="info-icon">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>

                            <div>

                                <h5>Office</h5>

                                <p>New Delhi, India</p>

                            </div>

                        </div>

                        <div class="info-card">

                            <div class="info-icon">
                                <i class="bi bi-clock-fill"></i>
                            </div>

                            <div>

                                <h5>Working Hours</h5>

                                <p>
                                    Monday - Friday
                                    <br>
                                    9:00 AM - 6:00 PM
                                </p>

                            </div>

                        </div>

                        <div class="social-card">

                            <h5 class="mb-3">
                                Follow Us
                            </h5>

                            <div class="social-icons">

                                <a href="#">
                                    <i class="bi bi-facebook"></i>
                                </a>

                                <a href="#">
                                    <i class="bi bi-instagram"></i>
                                </a>

                                <a href="#">
                                    <i class="bi bi-linkedin"></i>
                                </a>

                                <a href="#">
                                    <i class="bi bi-twitter-x"></i>
                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- ================= FAQ ================= -->

    <section id="faq" class="faq-section py-5">

        <div class="container">

            <div class="text-center mb-5">

                <span class="section-badge">
                    FAQ
                </span>

                <h2 class="mt-3">
                    Frequently Asked Questions
                </h2>

                <p class="text-muted">

                    Here are some common questions about FabricFlow.

                </p>

            </div>

            <div class="accordion" id="faqAccordion">

                <div class="accordion-item">

                    <h2 class="accordion-header">

                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faqOne">

                            How quickly will I receive a response?

                        </button>

                    </h2>

                    <div id="faqOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">

                        <div class="accordion-body">

                            We usually respond to all enquiries within
                            one business day.

                        </div>

                    </div>

                </div>

                <div class="accordion-item">

                    <h2 class="accordion-header">

                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faqTwo">

                            Can I schedule a demo?

                        </button>

                    </h2>

                    <div id="faqTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">

                        <div class="accordion-body">

                            Yes. Our team can arrange a personalized demo
                            based on your business requirements.

                        </div>

                    </div>

                </div>

                <div class="accordion-item">

                    <h2 class="accordion-header">

                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faqThree">

                            Does FabricFlow support growing businesses?

                        </button>

                    </h2>

                    <div id="faqThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">

                        <div class="accordion-body">

                            Absolutely. FabricFlow is designed for both
                            small wholesalers and expanding enterprises.

                        </div>

                    </div>

                </div>

                <div class="accordion-item">

                    <h2 class="accordion-header">

                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faqFour">

                            Do you provide onboarding support?

                        </button>

                    </h2>

                    <div id="faqFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">

                        <div class="accordion-body">

                            Yes. We help you get started and ensure a smooth
                            onboarding experience.

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- ================= Map ================= -->

    <section class="map-section pb-5">

        <div class="container">

            <div class="map-card">

                <iframe src="https://www.google.com/maps?q=New+Delhi&output=embed" width="100%" height="420"
                    style="border:0;" loading="lazy" allowfullscreen>
                </iframe>

            </div>

        </div>

    </section>

    <!-- ================= Success Toast ================= -->

    <div id="contactToast" class="contact-toast">

        <div class="toast-icon">

            <i class="bi bi-check-circle-fill"></i>

        </div>

        <div>

            <h5 class="mb-1">

                Message Sent Successfully

            </h5>

            <p class="mb-0">

                Thank you for contacting FabricFlow.
                We'll get back to you soon.

            </p>

        </div>

    </div>

</div>


@endsection