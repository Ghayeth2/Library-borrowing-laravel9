
@extends('layouts.homeBase')

@section('title', 'About Us | '.$settings->title)
@section('description', $settings->description)
@section('keyword', $settings->keyword)
@section('icon', \Illuminate\Support\Facades\Storage::url($settings->icon))
@include('homeTrails.aboutBanner')
@section('content')
    <!-- Start: Category Filter -->
        <div class="container" style="padding-top: 15px; padding-bottom: 15px;">
            <div class="row">
                <div class="col-md-12">
                    {!! $settings->aboutus !!}
                </div>

            </div>

        </div>
    <!-- Start: Category Filter -->



@endsection



