
@extends('layouts.homeBase')

@section('title', 'User Panel')
@include('homeTrails.user.profileBanner')
@section('content')
    <!-- Start: Category Filter -->
        <div class="container" style="padding-top: 20px; padding-bottom: 20px;">
            <div class="row">
                <div class="col-md-12">
                    @include('profile.show')
                </div>

            </div>

        </div>
    <!-- Start: Category Filter -->



@endsection



