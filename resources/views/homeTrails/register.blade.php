
@extends('layouts.homeBase')

@section('title', 'Sign up ')
@include('homeTrails.registerBanner')
@section('content')
    <!-- Start: Category Filter -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @include('auth.register')
                </div>

            </div>

        </div>
    <!-- Start: Category Filter -->



@endsection



