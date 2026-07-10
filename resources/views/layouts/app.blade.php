<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <meta name="description"
          content="Barkat Ali - Laravel Backend Developer Portfolio">

    <meta name="keywords"
          content="Laravel, PHP, Backend Developer, Portfolio, MySQL">

    <meta name="author"
          content="Barkat Ali">

    <title>@yield('title', 'Barkat Ali | Laravel Backend Developer')</title>

    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">

    {{-- Font Awesome --}}
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    {{-- AOS Animation --}}
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css"
          rel="stylesheet">

    {{-- Vite --}}
    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

</head>

<body>

    {{-- Animated Background --}}
    <div class="background-blur blur-one"></div>
    <div class="background-blur blur-two"></div>

    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Main Content --}}
    <main>

        @yield('content')

    </main>

    {{-- Footer --}}
    @include('partials.footer')

    {{-- Back To Top --}}
    <button id="backToTop">

        <i class="fas fa-arrow-up"></i>

    </button>

    {{-- AOS --}}
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script>

        AOS.init({

            duration:1000,

            once:true,

            easing:'ease-in-out'

        });

    </script>

</body>

</html>