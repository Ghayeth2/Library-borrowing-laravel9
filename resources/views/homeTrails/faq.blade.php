
@extends('layouts.homeBase')

@section('title', 'FAQ | '.$settings->title)
@section('description', $settings->description)
@section('keyword', $settings->keyword)
@section('icon', \Illuminate\Support\Facades\Storage::url($settings->icon))
@section('content')
    <!-- Start: Category Filter -->
    <section class="category-filter section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="padding-top: 30px; color: whitesmoke" >Frequently Asked Questions</h1>
                </div>
                <div class="col-md-12 " style="padding-top: 10px">
                    <div id="according">
                        @foreach($datalist as $row)
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#collapse{{$loop->iteration}}">
                                        <h3 style="color: white">{{$row->question}}</h3>
                                    </a>
                                </div>
                                <div id="collapse{{$loop->iteration}}" class="collapse @once show @endonce" data-parent="#according">
                                    <div class="card-body">
                                        <p style="color: lightgray; padding-top: 15px">{!! $row->answer !!}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start: Category Filter -->



@endsection



