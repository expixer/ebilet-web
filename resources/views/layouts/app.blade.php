<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Bitirme">
    <meta name="author" content="Bitirme">
    <title>Barren - @yield('title', 'Basit Çevrimiçi Etkinlik Biletleme Sistemi')</title>

    <link rel="icon" type="image/png" href="{{asset('assets/images/fav.png')}}">

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href='{{asset('unicons-2.0.1/css/unicons.css')}}' rel='stylesheet'>
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('css/night-mode.css')}}" rel="stylesheet">

    <link href="{{asset('fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('OwlCarousel/assets/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('OwlCarousel/assets/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    @yield('custom-css')
</head>
<body class="d-flex flex-column h-100">
@include('includes.header')
@yield('content')

@include('includes.footer')

{{--<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>--}}
<script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('OwlCarousel/owl.carousel.js')}}"></script>
<script src="{{asset('bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('js/night-mode.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
@yield('custom-js')

</body>

</html>
