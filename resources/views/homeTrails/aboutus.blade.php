
@extends('layouts.homeBase')

@section('title', 'About Us | '.$settings->title)
@section('description', $settings->description)
@section('keyword', $settings->keyword)
@section('icon', \Illuminate\Support\Facades\Storage::url($settings->icon))
@section('content')
    <!-- Start: Category Filter -->
    <section class="category-filter section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    {{!! $settings->aboutus !!}}
                </div>

            </div>

        </div>
    </section>
    <!-- Start: Category Filter -->



@endsection



