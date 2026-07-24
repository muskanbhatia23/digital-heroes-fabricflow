<section class="py-5 bg-white">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold">Trusted by Growing Wholesale Businesses</h2>
            <p class="text-muted">
                Helping wholesalers streamline operations with trusted solutions.
            </p>
        </div>

        @php
            $brands = [
                ['logo' => 'fashionHub.png', 'name' => 'Fashion Hub'],
                ['logo' => 'urbanWear.png', 'name' => 'Urban Wear'],
                ['logo' => 'styleMart.png', 'name' => 'Style Mart'],
                ['logo' => 'trendLine.png', 'name' => 'Trend Line'],
                ['logo' => 'fabricWorld.png', 'name' => 'Fabric World'],
                ['logo' => 'men.png', 'name' => 'Men Style'],
            ];
        @endphp

        <div class="row justify-content-center g-4">

            @foreach($brands as $brand)
                <div class="col-6 col-md-4 col-lg-2">

                    <div class="brand-card">

                        <img src="{{ asset('images/brands/'.$brand['logo']) }}"
                             alt="{{ $brand['name'] }}"
                             class="brand-logo">

                        <h6 class="brand-name mt-3 mb-0">
                            {{ $brand['name'] }}
                        </h6>

                    </div>

                </div>
            @endforeach

        </div>

    </div>
</section>