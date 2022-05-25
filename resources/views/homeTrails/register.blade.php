
@extends('layouts.homeBase')

@section('title', 'Sign up ')
@section('content')
    <!-- Start: Category Filter -->
    <section class="category-filter section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @include('auth.register')
                </div>

            </div>

        </div>
    </section>
    <!-- Start: Category Filter -->



@endsection



