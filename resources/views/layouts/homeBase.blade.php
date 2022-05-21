<html>
<head>
    <title> @yield('title')</title>
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">

    <!-- Title -->


    <!-- Favicon     -->
    <link href="{{asset('assets')}}/image/favicon.ico" rel="icon" type="image/x-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
    <link href="{{asset('assets')}}/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Mobile Menu -->
    <link href="{{asset("assets")}}/css/mmenu.css" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets")}}/css/mmenu.positioning.css" rel="stylesheet" type="text/css" />

    <!-- Stylesheet /style.css-->
    <link href="{{asset("assets")}}/style.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Resp
 ond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="{{asset('assets')}}/js/html5shiv.min.js"></script>
    <script src="{{asset('assets')}}/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
@section('header')
    @include("homeTrails.header")
@show
@section('slider')
@show
@section('search')

@show
@section('pageBanner')

@show

@section('welcome')

@show

<div class="container">
    @yield('content')
</div>

@section('footer')
    @include("homeTrails.footer")
@show
<!-- jQuery Latest Version 1.x -->
<script type="text/javascript" src="{{asset('assets')}}/js/jquery-1.12.4.min.js"></script>

<!-- jQuery UI -->
<script type="text/javascript" src="{{asset('assets')}}/js/jquery-ui.min.js"></script>

<!-- jQuery Easing -->
<script type="text/javascript" src="{{asset('assets')}}/js/jquery.easing.1.3.js"></script>

<!-- Bootstrap -->
<script type="text/javascript" src="{{asset('assets')}}/js/bootstrap.min.js"></script>

<!-- Mobile Menu -->
<script type="text/javascript" src="{{asset('assets')}}/js/mmenu.min.js"></script>

<!-- Harvey - State manager for media queries -->
<script type="text/javascript" src="{{asset('assets')}}/js/harvey.min.js"></script>

<!-- Waypoints - Load Elements on View -->
<script type="text/javascript" src="{{asset('assets')}}/js/waypoints.min.js"></script>

<!-- Facts Counter -->
<script type="text/javascript" src="{{asset('assets')}}/js/facts.counter.min.js"></script>

<!-- MixItUp - Category Filter -->
<script type="text/javascript" src="{{asset('assets')}}/js/mixitup.min.js"></script>

<!-- Owl Carousel -->
<script type="text/javascript" src="{{asset('assets')}}/js/owl.carousel.min.js"></script>

<!-- Accordion -->
<script type="text/javascript" src="{{asset('assets')}}/js/accordion.min.js"></script>

<!-- Responsive Tabs -->
<script type="text/javascript" src="{{asset('assets')}}/js/responsive.tabs.min.js"></script>

<!-- Responsive Table -->
<script type="text/javascript" src="{{asset('assets')}}/js/responsive.table.min.js"></script>

<!-- Masonry -->
<script type="text/javascript" src="{{asset('assets')}}/js/masonry.min.js"></script>

<!-- Carousel Swipe -->
<script type="text/javascript" src="{{asset('assets')}}/js/carousel.swipe.min.js"></script>

<!-- bxSlider -->
<script type="text/javascript" src="{{asset('assets')}}/js/bxslider.min.js"></script>

<!-- Custom Scripts -->
<script type="text/javascript" src="{{asset('assets')}}/js/main.js"></script>
</body>
</html>
