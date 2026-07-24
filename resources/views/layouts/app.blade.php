<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'FabricFlow')</title>

    <meta name="description" content="@yield('meta_description', 'FabricFlow - Wholesale Clothing Management Software')">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
     @stack('styles')
</head>
    <body class="d-flex flex-column min-vh-100">

    @include('components.navbar')

    <main class="flex-grow-1">
        @yield('content')
    </main>

    @include('components.footer')

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<script>
    AOS.init({
        duration: 900,
        once: true,
        offset: 100,
        easing: 'ease-out-cubic'
    });
</script>

<script>
window.addEventListener('scroll', function () {

    const navbar = document.querySelector('.custom-navbar');

    if (window.scrollY > 80) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }

});
</script>
@stack('scripts')
</body>
</html>