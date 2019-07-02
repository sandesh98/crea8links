<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>{{ config('app.name', 'Crea8links') }}</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <link rel="icon" type="image/png" href="{{ asset('favicon-32x32.png') }}" sizes="32x32"/>
    <link rel="icon" type="image/png" href="{{ asset('favicon-16x16.png') }}" sizes="16x16"/>
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli%7CRubik:400,400i,500,700">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/owlcarousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/magnific-popup/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

</head>

<body>

<!-- Preloader Begin -->
<div class='preloader w-100 h-100 position-fixed'>
    <div class="loader">
        <img class="icon" src="{{ asset('assets/img/preloader.png') }}" alt="">
    </div>
</div>
<!-- Preloader End -->

<!-- 404 Begin -->
<section class="min-vh-100 pt-5 pb-5 pb-lg-0 pt-lg-0 vw-100 d-flex align-items-center bg-404 ovx-hidden" data-bg-img="{{ asset('assets/img/404-bg.png') }}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="not-found-content text-center">
                    <img src="img/404.png" data-rjs="2" alt="">
                    <p>Oeps... Hier is niks te vinden <br>
                        Klik <a href="{{ route('home.index') }}">hier</a> om terug naar het beginscherm te gaan.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- 404 End -->

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/menu.min.js') }}"></script>
<script src="{{ asset('plugins/waypoints/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('plugins/waypoints/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('plugins/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('plugins/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('plugins/countdown/countdown.min.js') }}"></script>
<script src="{{ asset('plugins/retinajs/retina.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjkssBA3hMeFtClgslO2clWFR6bRraGz0"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>