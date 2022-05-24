
@extends('layouts.homeBase')

@section('title', 'Contact | '.$settings->title)
@section('description', $settings->description)
@section('keyword', $settings->keyword)
@section('icon', \Illuminate\Support\Facades\Storage::url($settings->icon))
@section('pageBanner')
    @include('homeTrails.contactBanner')
@endsection

@section('content')
    <!-- Start: Category Filter -->
    <section class="category-filter section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    {{!! $settings->contact !!}}
                </div>
                <div class="col-md-12">
                    <!-- Start: Contact Us Section -->
                    <div id="content" class="site-content">
                        <div id="primary" class="content-area">
                            <main id="main" class="site-main">
                                <div class="contact-main">
                                    <div class="contact-us">
                                        <div class="container">
                                            <div class="contact-location">
                                                <div class="flipcard">
                                                    <div class="front">
                                                        <div class="top-info">
                                                            <span><i class="fa fa-map-marker" aria-hidden="true"></i>Address</span>
                                                        </div>
                                                        <div class="bottom-info">
                                                            <span class="top-arrow"></span>
                                                            <ul>
                                                                <li>{{$settings->addresss}}</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="back">
                                                        <div class="bottom-info orange-bg">
                                                            <span class="bottom-arrow"></span>
                                                            <ul>
                                                                <li>{{$settings->address}}</li>
                                                            </ul>
                                                        </div>
                                                        <div class="top-info dark-bg">
                                                            <span><i class="fa fa-map-marker" aria-hidden="true"></i>Address</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flipcard">
                                                    <div class="front">
                                                        <div class="top-info">
                                                            <span><i class="fa fa-fax" aria-hidden="true"></i> Phone and Fax</span>
                                                        </div>
                                                        <div class="bottom-info">
                                                            <span class="top-arrow"></span>
                                                            <ul>
                                                                <li><a href="tel:+123-456-7890">Phone: {{$settings->phone}}</a></li>
                                                                <li><a href="fax:(001)-254-7359">Fax: {{$settings->fax}}</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="back">
                                                        <div class="bottom-info orange-bg">
                                                            <span class="bottom-arrow"></span>
                                                            <ul>
                                                                <li><a href="tel:+123-456-7890">Phone: {{$settings->phone}}</a></li>
                                                                <li><a href="fax:(001)-254-7359">Fax: {{$settings->fax}}</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="top-info dark-bg">
                                                            <span><i class="fa fa-fax" aria-hidden="true"></i> Phone and Fax</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flipcard">
                                                    <div class="front">
                                                        <div class="top-info">
                                                            <span><i class="fa fa-envelope" aria-hidden="true"></i> Email Address</span>
                                                        </div>
                                                        <div class="bottom-info">
                                                            <span class="top-arrow"></span>
                                                            <ul>
                                                                <li>{{$settings->email}}</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="back">
                                                        <div class="bottom-info orange-bg">
                                                            <span class="bottom-arrow"></span>
                                                            <ul>
                                                                <li><a href="http://www.libraria.com/">{{$settings->email}} </a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="top-info dark-bg">
                                                            <span><i class="fa fa-envelope" aria-hidden="true"></i> Email Address</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="row">
                                                <div class="contact-area">
                                                    <div class="container">
                                                        </div>
                                                        <div class="col-md-5 border-gray-right">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="contact-form bg-light margin-right">
                                                                        <h2>Send us a message</h2>
                                                                        <span class="underline left"></span>
                                                                        <div class="contact-fields">
                                                                            <form   action="{{route('savemessage')}}" method="post" >
                                                                                @csrf
                                                                                <div class="row">
                                                                                    <div class="col-md-6 col-sm-6">
                                                                                        <div class="form-group">
                                                                                            <input class="form-control" type="text" placeholder="Full Name" name="name" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6 col-sm-6">
                                                                                        <div class="form-group">
                                                                                            <input class="form-control" type="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" placeholder="Email" name="email"  />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6 col-sm-6">
                                                                                        <div class="form-group">
                                                                                            <input class="form-control" type="text" placeholder="Phone Number" name="phone"  />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6 col-sm-6">
                                                                                        <div class="form-group">
                                                                                            <input class="form-control" type="text" placeholder="Subject" name="subject" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6 col-sm-6">
                                                                                        <div class="form-group">
                                                                                            <textarea class="form-control" type="text" placeholder=" Your Message ..." name="message" > </textarea>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-sm-12">
                                                                                        <div class="form-group form-submit">
                                                                                            <input class="btn btn-default"  type="submit" name="submit" value="Send Message"  />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </main>
                        </div>
                    </div>
                    <!-- End: Contact Us Section -->
                </div>

            </div>

        </div>
    </section>
    <!-- Start: Category Filter -->



@endsection



