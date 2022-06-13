
@extends('layouts.homeBase')

@section('title', 'Login ')
@include('homeTrails.loginBanner')
@section('content')
    <!-- Start: Category Filter -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @include('auth.login')
                </div>

            </div>

        </div>
    <!-- Start: Category Filter -->



@endsection



