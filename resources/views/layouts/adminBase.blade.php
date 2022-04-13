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
@yield('footer')

</body>
</html>
