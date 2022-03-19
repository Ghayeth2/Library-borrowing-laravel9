<html>
<head>
    <title>App Name - @yield('title')</title>
    // bootstrap
    <link type="text/css" rel="stylesheet" href="{{asset("assets")}}/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="{{asset("assets")}}/css/animate.min.css">
    <link type="text/css" rel="stylesheet" href="{{asset("assets")}}/css/jquery.mCustomScrollbar.min.css">
    <link type="text/css" rel="stylesheet" href="{{asset("assets")}}/css/jquery-ui.css">
    <link type="text/css" rel="stylesheet" href="{{asset("assets")}}/css/meanmenu.css">
    <link type="text/css" rel="stylesheet" href="{{asset("assets")}}/css/nice-select.css">
    <link type="text/css" rel="stylesheet" href="{{asset("assets")}}/css/normalize.css">
    <link type="text/css" rel="stylesheet" href="{{asset("assets")}}/css/owl.carousel.min.css">
    <link type="text/css" rel="stylesheet" href="{{asset("assets")}}/css/responsive.css">
    <link type="text/css" rel="stylesheet" href="{{asset("assets")}}/css/slick.css">
    <link type="text/css" rel="stylesheet" href="{{asset("assets")}}/css/style.css">
</head>
<body>

@section('header')
    @include('homeTrails.lightHeader')
@show

@section('product')
    @include('homeTrails.lightProduct')
@show
<div class="container">
    @yield('content')
</div>
@section('footer')
    @include('homeTrails.lightFooter')
@show
@yield('footer')
</body>
</html>
