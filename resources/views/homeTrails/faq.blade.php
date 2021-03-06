
@extends('layouts.homeBase')

@section('title', 'FAQ | '.$settings->title)
@section('description', $settings->description)
@section('keyword', $settings->keyword)
@section('icon', \Illuminate\Support\Facades\Storage::url($settings->icon))
@include('homeTrails.faqBanner')
@section('content')
    <!-- Start: Category Filter -->
        <div class="container" style="padding-top: 20px;padding-bottom: 20px">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="padding-top: 30px; " >Frequently Asked Questions</h1>
                </div>
                <div class="col-md-12 " style="padding-top: 10px">
                    <div id="according">
                        @foreach($datalist as $row)
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#collapse{{$loop->iteration}}">
                                        <h3 style="color: gray">{{$row->question}}</h3>
                                    </a>
                                </div>
                                <div id="collapse{{$loop->iteration}}" class="collapse @once show @endonce" data-parent="#according">
                                    <div class="card-body">
                                        <p style=" padding-top: 15px">{!! $row->answer !!}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    <!-- Start: Category Filter -->



@endsection



