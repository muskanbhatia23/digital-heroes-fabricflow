<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'FabricFlow')</title>

    <meta name="description" content="@yield('meta_description', 'FabricFlow - Wholesale Clothing Management Software')">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
    <body class="d-flex flex-column min-vh-100">

    @include('components.navbar')

    <main class="flex-grow-1">
        @yield('content')
    </main>

    @include('components.footer')

</body>
</html>