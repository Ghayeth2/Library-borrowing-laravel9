<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title> @yield('title')</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('adminPannel')}}/images/favicon.png">
    <link rel="stylesheet" href="{{asset('adminPannel')}}/vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('adminPannel')}}/vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="{{asset('adminPannel')}}/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="{{asset('adminPannel')}}/css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/99b277cd45.js" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

    @yield('head')


</head>
<body>

@section('preloader')
    @include("Admin.preloader")
@show
@section('header')
    @include("Admin.header")
@show
@section('sidebar')
    @include("Admin.sidebar")
@show

<div class="container">
    @yield('content')
</div>
@section('footer')
    @include("Admin.footer")
@show
<!--**********************************
        Scripts
    ***********************************-->
<!-- Required vendors -->
<script src="{{asset('adminPannel')}}/vendor/global/global.min.js"></script>
<script src="{{asset('adminPannel')}}/js/quixnav-init.js"></script>
<script src="{{asset('adminPannel')}}/js/custom.min.js"></script>


<!-- Vectormap -->
<script src="{{asset('adminPannel')}}/vendor/raphael/raphael.min.js"></script>
<script src="{{asset('adminPannel')}}/vendor/morris/morris.min.js"></script>


<script src="{{asset('adminPannel')}}/vendor/circle-progress/circle-progress.min.js"></script>
<script src="{{asset('adminPannel')}}/vendor/chart.js/Chart.bundle.min.js"></script>

<script src="{{asset('adminPannel')}}/vendor/gaugeJS/dist/gauge.min.js"></script>

<!--  flot-chart js -->
<script src="{{asset('adminPannel')}}/vendor/flot/jquery.flot.js"></script>
<script src="{{asset('adminPannel')}}/vendor/flot/jquery.flot.resize.js"></script>

<!-- Owl Carousel -->
<script src="{{asset('adminPannel')}}/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<!-- Counter Up -->
<script src="{{asset('adminPannel')}}/vendor/jqvmap/js/jquery.vmap.min.js"></script>
<script src="{{asset('adminPannel')}}/vendor/jqvmap/js/jquery.vmap.usa.js"></script>
<script src="{{asset('adminPannel')}}/vendor/jquery.counterup/jquery.counterup.min.js"></script>


<script src="{{asset('adminPannel')}}/js/dashboard/dashboard-1.js"></script>
@yield('footer')

</body>
</html>
