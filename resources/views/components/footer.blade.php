<footer class="bg-dark text-white pt-5 pb-3 mt-5">
    <div class="container">
        <div class="row gy-4">

            <!-- Brand -->
            <div class="col-lg-4">
                <h4 class="fw-bold">FabricFlow</h4>
                <p class="text-light mb-0">
                    FabricFlow empowers wholesale clothing businesses to manage inventory,
                    bulk orders, retailers, and sales through one intelligent platform.
                </p>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-2">
                <h6 class="fw-semibold">Quick Links</h6>
                <ul class="list-unstyled">
                    <li><a href="{{ route('home') }}" class="text-decoration-none text-light">Home</a></li>
                    <li><a href="{{ route('product') }}" class="text-decoration-none text-light">Product</a></li>
                    <li><a href="{{ route('pricing') }}" class="text-decoration-none text-light">Pricing</a></li>
                    <li><a href="{{ route('contact') }}" class="text-decoration-none text-light">Contact</a></li>
                </ul>
            </div>

            <!-- Company -->
            <div class="col-lg-3">
                <h6 class="fw-semibold">Company</h6>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-decoration-none text-light">About Us</a></li>
                    <li><a href="#" class="text-decoration-none text-light">Privacy Policy</a></li>
                    <li><a href="#" class="text-decoration-none text-light">Terms & Conditions</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="col-lg-3">
                <h6 class="fw-semibold">Contact</h6>

                <p class="mb-2">
                    <strong>Phone:</strong><br>
                    <a href="tel:+917986137043" class="text-decoration-none text-light">
                        +91 79861 37043
                    </a>
                </p>

                <p class="mb-2">
                    <strong>Email:</strong><br>
                    <a href="mailto:muskan.officialworks@gmail.com" class="text-decoration-none text-light">
                        muskan.officialworks@gmail.com
                    </a>
                </p>
            </div>

        </div>

        <hr class="border-secondary my-4">

        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center text-center text-md-start gap-2">

            <p class="mb-2 mb-md-0">
                © {{ date('Y') }} FabricFlow. All Rights Reserved.
            </p>

            <p class="mb-0 small">
                Built for
                <a href="https://digitalheroesco.com"
                   target="_blank"
                   rel="noopener"
                   class="text-white fw-semibold">
                    Digital Heroes Training Task
                </a>
            </p>

        </div>
    </div>
</footer>