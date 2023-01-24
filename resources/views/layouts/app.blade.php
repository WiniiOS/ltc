<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>LTC GROUP / HOME </title>
        <meta content="" name="description">
        <meta content="" name="keywords">
        <!-- Favicons -->
        <link href="{{ asset('imports/assets/img/favicon.png') }}" rel="icon">
        <link href="{{ asset('imports/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
        <!-- Vendor CSS Files -->
        <link href="{{ asset('imports/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('imports/assets/vendor/aos/aos.css') }}" rel="stylesheet">
        <link href="{{ asset('imports/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('imports/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('imports/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('imports/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('imports/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
        <!-- Template Main CSS File -->
        <link href="{{ asset('imports/assets/css/style.css') }}" rel="stylesheet">
    </head>
    <body>

        @include('partials.topbar') 
        @include('partials.navbar')
        @yield('content')
        @include('partials.footer')

        <!-- Vendor JS Files -->
        <script src="{{ asset('imports/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
        <script src="{{ asset('imports/assets/vendor/aos/aos.js') }}"></script>
        <script src="{{ asset('imports/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('imports/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('imports/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('imports/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('imports/assets/vendor/php-email-form/validate.js') }}"></script>
        <!-- Template Main JS File -->
        <script src="{{ asset('imports/assets/js/main.js') }}"></script>
            
    </body>
</html>