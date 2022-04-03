<html>
<head>
    <title> @yield('title')</title>
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">

    <!-- Title -->


    <!-- Favicon -->
    <link href="{{asset('assets')}}/images/favicon.ico" rel="icon" type="image/x-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
    <link href="{{asset('assets')}}/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <!-- Mobile Menu -->
    <link href="{{asset('assets')}}/css/mmenu.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets')}}/css/mmenu.positioning.css" rel="stylesheet" type="text/css" />

    <!-- Stylesheet -->
    <link href="{{asset('assets')}}/style.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{asset('assets')}}/js/html5shiv.min.js"></script>
    <script src="{{asset('assets')}}/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

@section('header')
    @include('homeTrails.header')
@show
@section('slider')
@show
@section('search')

@show
@section('welcome')

@show

<div class="container">
    @yield('content')
</div>
@section('footer')
    @include('homeTrails.footer')
@show
@yield('footer')
</body>
</html>
