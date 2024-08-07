<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @yield('meta')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="{{ asset('frontend/assets/image/LOGOS/PFD GLOBAL.jpg')}}" type="image/x-icon" />

    @if (app()->environment('local'))
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/Bootstrap-css-v5.0.2.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.theme.default.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/header.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/tab-section.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/banner.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/main-body.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/footer.css') }}" />
    @elseif (app()->environment('dev') || app()->environment('production'))
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/enorsia/pfd-global-cdn/assets/css/Bootstrap-css-v5.0.2.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/enorsia/pfd-global-cdn/assets/css/owl.carousel.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/enorsia/pfd-global-cdn/assets/css/owl.theme.default.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/enorsia/pfd-global-cdn/assets/css/style.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/enorsia/pfd-global-cdn/assets/css/header.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/enorsia/pfd-global-cdn/assets/css/tab-section.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/enorsia/pfd-global-cdn/assets/css/banner.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/enorsia/pfd-global-cdn/assets/css/main-body.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/enorsia/pfd-global-cdn/assets/css/footer.css" />
    @endif

    @yield('css')

</head>

<body>

    @include('frontend.layout.header')
    @yield('content')
    @include('frontend.layout.footer')
    <i id="scrollToTopBtn" class="fa-solid fa-angles-up"></i>


    @if (app()->environment('local'))
        <script src="{{ asset('frontend/assets/js/jQuery v3.7.1.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/bootstrap-bundle-min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/modernizr.min.js') }}"></script>
    @elseif (app()->environment('dev') || app()->environment('production'))
        <script src="https://cdn.jsdelivr.net/gh/enorsia/pfd-global-cdn/assets/js/jQuery v3.7.1.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/enorsia/pfd-global-cdn/assets/js/jquery-ui.min.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/enorsia/pfd-global-cdn/assets/js/bootstrap-bundle-min.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/enorsia/pfd-global-cdn/assets/js/owl.carousel.min.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/enorsia/pfd-global-cdn/assets/js/main.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/enorsia/pfd-global-cdn/assets/js/modernizr.min.js"></script>
    @endif

    @include('frontend.layout.script')

    @yield('js')

</body>
</html>
