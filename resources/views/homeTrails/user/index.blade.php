
@extends('layouts.homeBase')

@section('title', 'User Panel')
@section('content')
    <!-- Start: Category Filter -->
    <section class="category-filter section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @include('profile.show')
                </div>

            </div>

        </div>
    </section>
    <!-- Start: Category Filter -->



@endsection



