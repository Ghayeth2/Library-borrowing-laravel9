
@extends('layouts.homeBase')

@section('title', 'Library')
@section('slider')
        @include('homeTrails.slider')

@endsection
@section('search')
    @include('homeTrails.search')

@endsection
@section('welcome')
    @include('homeTrails.welcome')
@endsection



@section('content')
    <!-- Start: Category Filter -->
    <section class="category-filter section-padding">
        <div class="container">
            <div class="center-content">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <h2 class="section-title">Check Out The New Releases</h2>
                        <span class="underline center"></span>
                        <p class="lead">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                    </div>
                </div>
            </div>
            <div class="filter-buttons">
                <div class="filter btn" data-filter="all">All Releases</div>
                <div class="filter btn" data-filter=".adults">Adults</div>
                <div class="filter btn" data-filter=".kids-teens">Kids &amp; Teens</div>
                <div class="filter btn" data-filter=".video">Video</div>
                <div class="filter btn" data-filter=".audio">Audio</div>
                <div class="filter btn" data-filter=".books">Books</div>
                <div class="filter btn" data-filter=".magazines">Magazines</div>
            </div>
        </div>
        <div id="category-filter">
            <ul class="category-list">
                @foreach($booklist as $row)
                <li class="category-item adults">
                    <figure>
                        <img src="{{\Illuminate\Support\Facades\Storage::url($row->image)}}"  style="width: 480px; height: 360px"
                             alt="New Releaase" />
                        <figcaption class="bg-orange">
                            <div class="info-block">
                                <h4>{{$row->title}}</h4>
                                <span class="author"><strong>Author:</strong> {{$row->author}}</span>
                                <span class="author"><strong>ISBN:</strong> {{$row->isbn}}</span>
                                <div class="rating">
                                    <span>☆</span>
                                    <span>☆</span>
                                    <span>☆</span>
                                    <span>☆</span>
                                    <span>☆</span>
                                </div>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                                <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                <ol>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-envelope"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-share-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </li>
                                </ol>
                            </div>
                        </figcaption>
                    </figure>
                </li>
                @endforeach
                <!--<li class="category-item kids-teens">
                    <figure>
                        <img src="{{asset("assets")}}/images/category-filter/home-v1/category-filter-img-02.jpg" alt="New Releaase" />
                        <figcaption class="bg-orange">
                            <div class="info-block">
                                <h4>The Great Gatsby</h4>
                                <span class="author"><strong>Author:</strong> F. Scott Fitzgerald</span>
                                <span class="author"><strong>ISBN:</strong> 9781581573268</span>
                                <div class="rating">
                                    <span>☆</span>
                                    <span>☆</span>
                                    <span>☆</span>
                                    <span>☆</span>
                                    <span>☆</span>
                                </div>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                                <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                <ol>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-envelope"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-share-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </li>
                                </ol>
                            </div>
                        </figcaption>
                    </figure>
                </li>
                <li class="category-item video">
                    <figure>
                        <img src="{{asset('assets')}}/images/category-filter/home-v1/category-filter-img-03.jpg" alt="New Releaase" />
                        <figcaption class="bg-orange">
                            <div class="info-block">
                                <h4>The Great Gatsby</h4>
                                <span class="author"><strong>Author:</strong> F. Scott Fitzgerald</span>
                                <span class="author"><strong>ISBN:</strong> 9781581573268</span>
                                <div class="rating">
                                    <span>☆</span>
                                    <span>☆</span>
                                    <span>☆</span>
                                    <span>☆</span>
                                    <span>☆</span>
                                </div>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                                <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                <ol>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-envelope"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-share-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </li>
                                </ol>
                            </div>
                        </figcaption>
                    </figure>
                </li>
            </ul>
            <div class="center-content">
                <a href="#" class="btn btn-primary">View More</a>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>
     Start: Category Filter -->


@endsection



