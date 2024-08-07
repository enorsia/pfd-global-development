<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @yield('meta')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    @if (app()->environment('local'))
        <link rel="shortcut icon" href="{{ asset('frontend/assets/image/LOGOS/PFD GLOBAL.jpg')}}" type="image/x-icon" />
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/Bootstrap-css-v5.0.2.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.theme.default.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/header.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/tab-section.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/banner.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/main-body.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/footer.css') }}" />
    @endif

    @if (app()->environment('dev') || app()->environment('production'))

    @endif

</head>

<body>

    @include('frontend.layout.header')



    @include('frontend.home.video')

    @include('frontend.home.heading')

    @include('frontend.home.location')

    @include('frontend.home.tab')

    @include('frontend.home.process')

    @include('frontend.home.looking')

    @include('frontend.home.tech')

    @include('frontend.home.partner')

    @include('frontend.home.card')

    @include('frontend.home.img_box')

    @include('frontend.home.contact_form')



    @include('frontend.layout.footer')

    <!-- Bottom to Top -->
    <i id="scrollToTopBtn" class="fa-solid fa-angles-up"></i>
    <!-- End Bottom to Top -->


    @if (app()->environment('local'))
        <script src="{{ asset('frontend/assets/js/jQuery v3.7.1.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/bootstrap-bundle-min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/modernizr.min.js') }}"></script>
    @endif

    @if (app()->environment('dev') || app()->environment('production'))

    @endif

    @include('frontend.layout.script')

</body>
</html>
