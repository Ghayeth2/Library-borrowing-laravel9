@extends('layouts.mainlayout')

@section('title', 'Test2 Page')

@section('sidebar')
    @parent

    <p>This is appended to the master <strong>sidebar</strong> 2.</p>
@endsection

@section('content')
    <p>This is my body content 2.</p>
@endsection
