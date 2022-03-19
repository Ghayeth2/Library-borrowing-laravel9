<html>
<head>
    <title>App Name - @yield('title')</title>
</head>
@yield('head')
<body>
@section('header')
    <h2>This is header <br></h2>
@show

@section('sidebar')
    <p>This is sidebar 1.<br></p>
@show

@section('slider')
    <p>This is slider .<br></p>
@show
<div class="container">
    @yield('content')
</div>
@section('footer')
    <p>This is Footer .<br></p>
@show
</body>
</html>
