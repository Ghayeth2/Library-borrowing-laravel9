
@extends('layouts.homeBase')

@section('title', 'Login ')
@section('content')
    <!-- Start: Category Filter -->
    <section class="category-filter section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @include('auth.login')
                </div>

            </div>

        </div>
    </section>
    <!-- Start: Category Filter -->



@endsection



