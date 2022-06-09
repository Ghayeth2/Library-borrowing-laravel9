
@extends('layouts.homeBase')

@section('title', 'My Borrows')

@section('slider')
        @include('homeTrails.user.borrowedBanner')
@endsection

@section('search')
    @include('homeTrails.user.cart')

@endsection

@section('content')
@endsection



