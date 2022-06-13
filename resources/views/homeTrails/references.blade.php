
@extends('layouts.homeBase')

@section('title', 'References | '.$settings->title)
@section('description', $settings->description)
@section('keyword', $settings->keyword)
@section('icon', \Illuminate\Support\Facades\Storage::url($settings->icon))
@include('homeTrails.referencesBanner')
@section('content')
    <!-- Start: Category Filter -->

        <div class="container" style="padding-top: 20px; padding-bottom: 15px;">
            <div class="row">
                <div class="col-md-12">
                    {!! $settings->references !!}
                </div>

            </div>

        </div>
    <!-- Start: Category Filter -->



@endsection



