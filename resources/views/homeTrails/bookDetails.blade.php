
@extends('layouts.homeBase')

@section('title', $data->title)
@include('homeTrails.bookDetailBanner')


@section('content')
    <!-- Start: Products Section -->
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="booksmedia-detail-main">
                    <div class="container">
                        <div class="row">
                            <!-- Start: Search Section -->
                            <section class="search-filters">
                                <div class="container">
                                    <div class="filter-box">
                                        <h3>What are you looking for at the library?</h3>
                                        <form action="http://libraria.demo.presstigers.com/index.html" method="get">
                                            <div class="col-md-4 col-sm-6">
                                                <div class="form-group">
                                                    <label class="sr-only" for="keywords">Search by Keyword</label>
                                                    <input class="form-control" placeholder="Search by Keyword" id="keywords" name="keywords" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="form-group">
                                                    <select name="catalog" id="catalog" class="form-control">
                                                        <option>Search the Catalog</option>
                                                        <option>Catalog 01</option>
                                                        <option>Catalog 02</option>
                                                        <option>Catalog 03</option>
                                                        <option>Catalog 04</option>
                                                        <option>Catalog 05</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="form-group">
                                                    <select name="category" id="category" class="form-control">
                                                        <option>All Categories</option>
                                                        <option>Category 01</option>
                                                        <option>Category 02</option>
                                                        <option>Category 03</option>
                                                        <option>Category 04</option>
                                                        <option>Category 05</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-6">
                                                <div class="form-group">
                                                    <input class="form-control" type="submit" value="Search">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </section>
                            <!-- End: Search Section -->
                        </div>
                        <div class="row">
                            <div class="col-md-9 col-md-push-3">
                                <div class="booksmedia-detail-box">
                                    @include('homeTrails.message')
                                    <div class="single-book-box">
                                        <div class="post-thumbnail">
                                            <div class="book-list-icon yellow-icon"></div>
                                            <img alt="Book" src="{{Storage::url($data->image)}}"
                                                 style="width: 300px; height: 465px;"/>
                                        </div>
                                        <div class="post-detail">
                                            <div class="books-social-sharing">
                                                <ul>
                                                    <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                                                    <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="optional-links">
                                                <ul>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add To Cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                            <i class="fa fa-heart"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                            <i class="fa fa-search"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                            <i class="fa fa-print"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <header class="entry-header">
                                                <h2 class="entry-title">{{$data->title}}</h2>
                                                <ul>
                                                    <li><strong>Author:</strong> {{$data->author}}</li>
                                                    <li><strong>ISBN:</strong> {{$data->isbn}}</li>
                                                    <li>
                                                        @php
                                                            $average = $data->comment->avg('rate');
                                                        @endphp
                                                        {{number_format($average,2)}}
                                                        <div class="rating">
                                                            <strong>Rating:</strong>
                                                            <i class="fa fa-star @if($average<1) -o empty @endif"></i>
                                                            <i class="fa fa-star @if($average<2) -o empty @endif"></i>
                                                            <i class="fa fa-star @if($average<3) -o empty @endif"></i>
                                                            <i class="fa fa-star @if($average<4) -o empty @endif"></i>
                                                            <i class="fa fa-star @if($average<5) -o empty @endif"></i>
                                                        </div>
                                                    </li>
                                                    <li><strong>Edition:</strong> {{$data->edition}}</li>
                                                    <li> <a href="#"> {{$data->comment->count('id')}}  <strong>Comment(s)</strong> </a></li>
                                                </ul>
                                            </header>
                                                <div class="entry-content post-buttons">
                                                    <a href="{{route('borrowmain',['id'=>$data->id])}}"  class="btn btn-dark-gray">Borrow This Book</a>
                                                </div>

                                        </div>
                                    </div>
                                    <div class="card-header">
                                        <button  class="btn btn-dark-gray" data-toggle="collapse" href="#collapse{{$data->iteration}}">
                                            <h3 style="color: gray">Collapsed Button</h3></button>
                                        </a>
                                    </div>
                                    <div id="collapse{{$data->iteration}}" class="collapse @once show @endonce" data-parent="#according">
                                        <div class="card-body">
                                            <p style=" padding-top: 15px">Collapsed Data</p>
                                        </div>
                                    </div>
                                    <p><strong>Summary:</strong> {{$data->description}} </p>
                                    <div class="booksmedia-fullwidth booksmedia-popular-list">
                                        <h2 class="section-title text-center">Comment & Review Section</h2>
                                        <div class="contact-fields">
                                            <form   action="{{route('savecomment')}}" method="post" >
                                                @csrf
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <input class="form-control" type="text" name="comment" placeholder="Your Comment"  />
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <input  class="form-control" type="hidden" name="book_id" value="{{$data->id}}"/>
                                                        </div>
                                                    </div>

                                                   <div class="col-md-6 col-sm-6">
                                                       <div class="form-group">
                                                           <strong class="text-uppercase">Your Rating : </strong>
                                                           <div class="rating">
                                                               <input type="radio" name="rate" id="star5" value="5"><label for="star5"></label>
                                                               <input type="radio" name="rate" id="star4" value="4"><label for="star4"></label>
                                                               <input type="radio" name="rate" id="star3" value="3"><label for="star3"></label>
                                                               <input type="radio" name="rate" id="star2" value="2"><label for="star2"></label>
                                                               <input type="radio" name="rate" id="star1" value="1"><label for="star1"></label>
                                                           </div>

                                                       </div>
                                                   </div>
                                                    @auth()
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-submit">
                                                            <input class="btn btn-default"  type="submit" name="submit" value="Send Review"  />
                                                        </div>
                                                    </div>
                                                    @else
                                                        <a href="/login"> <button type="button" class="btn btn-success " >
                                                                Log In</button></a>
                                                    @endauth
                                                </div>
                                            </form>
                                        </div>
                                        <span class="underline center"></span>
                                        <p class="lead text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        <ul class="popular-items-detail-v1">
                                            <li>
                                                <div class="book-list-icon blue-icon"></div>
                                                <figure>
                                                    <img src="images/books-media/layout-3/books-media-layout3-01.jpg" alt="Book">
                                                    <figcaption>
                                                        <header>
                                                            <h4><a href="#.">The Great Gatsby</a></h4>
                                                            <p><strong>Author:</strong>  F. Scott Fitzgerald</p>
                                                            <p><strong>ISBN:</strong>  9781581573268</p>
                                                        </header>
                                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                                                        <div class="actions">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add To Cart">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                                        <i class="fa fa-search"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                        <i class="fa fa-print"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                        <i class="fa fa-share-alt"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </li>
                                            <li>
                                                <div class="book-list-icon yellow-icon"></div>
                                                <figure>
                                                    <img src="images/books-media/layout-3/books-media-layout3-02.jpg" alt="Book">
                                                    <figcaption>
                                                        <header>
                                                            <h4><a href="#.">The Great Gatsby</a></h4>
                                                            <p><strong>Author:</strong>  F. Scott Fitzgerald</p>
                                                            <p><strong>ISBN:</strong>  9781581573268</p>
                                                        </header>
                                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                                                        <div class="actions">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add To Cart">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                                        <i class="fa fa-search"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                        <i class="fa fa-print"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                        <i class="fa fa-share-alt"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </li>
                                            <li>
                                                <div class="book-list-icon green-icon"></div>
                                                <figure>
                                                    <img src="images/books-media/layout-3/books-media-layout3-03.jpg" alt="Book">
                                                    <figcaption>
                                                        <header>
                                                            <h4><a href="#.">The Great Gatsby</a></h4>
                                                            <p><strong>Author:</strong>  F. Scott Fitzgerald</p>
                                                            <p><strong>ISBN:</strong>  9781581573268</p>
                                                        </header>
                                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                                                        <div class="actions">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add To Cart">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                                        <i class="fa fa-search"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                        <i class="fa fa-print"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                        <i class="fa fa-share-alt"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </li>
                                            <li>
                                                <div class="book-list-icon blue-icon"></div>
                                                <figure>
                                                    <img src="images/books-media/layout-3/books-media-layout3-01.jpg" alt="Book">
                                                    <figcaption>
                                                        <header>
                                                            <h4><a href="#.">The Great Gatsby</a></h4>
                                                            <p><strong>Author:</strong>  F. Scott Fitzgerald</p>
                                                            <p><strong>ISBN:</strong>  9781581573268</p>
                                                        </header>
                                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                                                        <div class="actions">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add To Cart">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                                        <i class="fa fa-search"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                        <i class="fa fa-print"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                        <i class="fa fa-share-alt"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </li>
                                            <li>
                                                <div class="book-list-icon yellow-icon"></div>
                                                <figure>
                                                    <img src="images/books-media/layout-3/books-media-layout3-02.jpg" alt="Book">
                                                    <figcaption>
                                                        <header>
                                                            <h4><a href="#.">The Great Gatsby</a></h4>
                                                            <p><strong>Author:</strong>  F. Scott Fitzgerald</p>
                                                            <p><strong>ISBN:</strong>  9781581573268</p>
                                                        </header>
                                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                                                        <div class="actions">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add To Cart">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                                        <i class="fa fa-search"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                        <i class="fa fa-print"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                        <i class="fa fa-share-alt"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </li>
                                            <li>
                                                <div class="book-list-icon green-icon"></div>
                                                <figure>
                                                    <img src="images/books-media/layout-3/books-media-layout3-03.jpg" alt="Book">
                                                    <figcaption>
                                                        <header>
                                                            <h4><a href="#.">The Great Gatsby</a></h4>
                                                            <p><strong>Author:</strong>  F. Scott Fitzgerald</p>
                                                            <p><strong>ISBN:</strong>  9781581573268</p>
                                                        </header>
                                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                                                        <div class="actions">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add To Cart">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                                        <i class="fa fa-search"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                        <i class="fa fa-print"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                        <i class="fa fa-share-alt"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-md-pull-9">
                                <aside id="secondary" class="sidebar widget-area" data-accordion-group>
                                    <div class="widget widget_related_search open" data-accordion>
                                        <h4 class="widget-title" data-control>Related Searches</h4>
                                        <div data-content>
                                            <div data-accordion>
                                                <h5 class="widget-sub-title" data-control>Subject</h5>
                                                <div class="widget_categories" data-content>
                                                    <ul>
                                                        <li><a href="#">Love stories <span>(18)</span></a></li>
                                                        <li><a href="#">Texas <span>(04)</span></a></li>
                                                        <li><a href="#">Rich people <span>(03)</span></a></li>
                                                        <li><a href="#">Humorous stories <span>(02)</span></a></li>
                                                        <li><a href="#">Widows <span>(02)</span></a></li>
                                                        <li><a href="#">Women <span>(11)</span></a></li>
                                                        <li><a href="#">Babysitters <span>(25)</span></a></li>
                                                        <li><a href="#">Law firms <span>(09)</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div data-accordion>
                                                <h5 class="widget-sub-title" data-control>Authors</h5>
                                                <div class="widget_categories" data-content>
                                                    <ul>
                                                        <li><a href="#">Love stories <span>(18)</span></a></li>
                                                        <li><a href="#">Texas <span>(04)</span></a></li>
                                                        <li><a href="#">Rich people <span>(03)</span></a></li>
                                                        <li><a href="#">Humorous stories <span>(02)</span></a></li>
                                                        <li><a href="#">Widows <span>(02)</span></a></li>
                                                        <li><a href="#">Women <span>(11)</span></a></li>
                                                        <li><a href="#">Babysitters <span>(25)</span></a></li>
                                                        <li><a href="#">Law firms <span>(09)</span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div data-accordion>
                                                <h5 class="widget-sub-title" data-control>Series</h5>
                                                <div class="widget_categories" data-content>
                                                    <ul>
                                                        <li><a href="#">Love stories <span>(18)</span></a></li>
                                                        <li><a href="#">Texas <span>(04)</span></a></li>
                                                        <li><a href="#">Rich people <span>(03)</span></a></li>
                                                        <li><a href="#">Humorous stories <span>(02)</span></a></li>
                                                        <li><a href="#">Widows <span>(02)</span></a></li>
                                                        <li><a href="#">Women <span>(11)</span></a></li>
                                                        <li><a href="#">Babysitters <span>(25)</span></a></li>
                                                        <li><a href="#">Law firms <span>(09)</span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div data-accordion>
                                                <h5 class="widget-sub-title" data-control>Other Searches</h5>
                                                <div class="widget_categories" data-content>
                                                    <ul>
                                                        <li><a href="#">Love stories <span>(18)</span></a></li>
                                                        <li><a href="#">Texas <span>(04)</span></a></li>
                                                        <li><a href="#">Rich people <span>(03)</span></a></li>
                                                        <li><a href="#">Humorous stories <span>(02)</span></a></li>
                                                        <li><a href="#">Widows <span>(02)</span></a></li>
                                                        <li><a href="#">Women <span>(11)</span></a></li>
                                                        <li><a href="#">Babysitters <span>(25)</span></a></li>
                                                        <li><a href="#">Law firms <span>(09)</span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="widget widget_narrow_search" data-accordion>
                                        <h4 class="widget-title" data-control>Narrow your search</h4>
                                        <div data-content>
                                            <div data-accordion>
                                                <h5 class="widget-sub-title" data-control>Type of Material</h5>
                                                <div class="widget_material" data-content>
                                                    <form action="#">
                                                        <label><input type="checkbox" name="material" value="books"> Books</label>
                                                        <label><input type="checkbox" name="material" value="electronic" checked> Electronic Resources</label>
                                                        <label><input type="checkbox" name="material" value="ebooks"> ebooks</label>
                                                        <label><input type="checkbox" name="material" value="soundrecording" checked> Sound Recording</label>
                                                        <label><input type="checkbox" name="material" value="largeprint"> Large Print</label>
                                                        <label><input type="checkbox" name="material" value="audioebooks" checked> Audio eBooks</label>
                                                    </form>
                                                </div>
                                            </div>
                                            <div data-accordion>
                                                <h5 class="widget-sub-title" data-control>Publishing Date </h5>
                                                <div class="widget widget_material" data-content>
                                                    <form action="#">
                                                        <label><input type="checkbox" name="material" value="books"> Books</label>
                                                        <label><input type="checkbox" name="material" value="electronic" checked> Electronic Resources</label>
                                                        <label><input type="checkbox" name="material" value="ebooks"> ebooks</label>
                                                        <label><input type="checkbox" name="material" value="soundrecording" checked> Sound Recording</label>
                                                        <label><input type="checkbox" name="material" value="largeprint"> Large Print</label>
                                                        <label><input type="checkbox" name="material" value="audioebooks" checked> Audio eBooks</label>
                                                    </form>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div data-accordion>
                                                <h5 class="widget-sub-title" data-control>Popularity </h5>
                                                <div class="widget widget_material" data-content>
                                                    <form action="#">
                                                        <label><input type="checkbox" name="material" value="books"> Books</label>
                                                        <label><input type="checkbox" name="material" value="electronic" checked> Electronic Resources</label>
                                                        <label><input type="checkbox" name="material" value="ebooks"> ebooks</label>
                                                        <label><input type="checkbox" name="material" value="soundrecording" checked> Sound Recording</label>
                                                        <label><input type="checkbox" name="material" value="largeprint"> Large Print</label>
                                                        <label><input type="checkbox" name="material" value="audioebooks" checked> Audio eBooks</label>
                                                    </form>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div data-accordion>
                                                <h5 class="widget-sub-title" data-control>Language </h5>
                                                <div class="widget widget_material" data-content>
                                                    <form action="#">
                                                        <label><input type="checkbox" name="material" value="books"> Books</label>
                                                        <label><input type="checkbox" name="material" value="electronic" checked> Electronic Resources</label>
                                                        <label><input type="checkbox" name="material" value="ebooks"> ebooks</label>
                                                        <label><input type="checkbox" name="material" value="soundrecording" checked> Sound Recording</label>
                                                        <label><input type="checkbox" name="material" value="largeprint"> Large Print</label>
                                                        <label><input type="checkbox" name="material" value="audioebooks" checked> Audio eBooks</label>
                                                    </form>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="widget widget_recent_releases">
                                        <h4 class="widget-title">New Releases</h4>
                                        <ul>
                                            <li><a href="#">Books</a></li>
                                            <li><a href="#">eBooks</a></li>
                                            <li><a href="#">DVDS</a></li>
                                            <li><a href="#">Magazines</a></li>
                                            <li><a href="#">Audio</a></li>
                                            <li><a href="#">eAudio</a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="widget widget_recent_entries">
                                        <h4 class="widget-title">Reviews & Comments</h4>
                                        <ul>
                                                @foreach($review as $row)
                                                <li>
                                                    <span class="price"><strong>User :</strong> {{$row->user->name}}</span>
                                                    <span><strong>Created at :</strong> {{$row->created_at}}</span>
                                                    <div class="rating">
                                                        <i class="fa fa-star @if($row->rate<1) -o empty @endif"></i>
                                                        <i class="fa fa-star @if($row->rate<2) -o empty @endif"></i>
                                                        <i class="fa fa-star @if($row->rate<3) -o empty @endif"></i>
                                                        <i class="fa fa-star @if($row->rate<4) -o empty @endif"></i>
                                                        <i class="fa fa-star @if($row->rate<5) -o empty @endif"></i>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                                    <div>
                                                        {{$row->comment}}
                                                    </div>
                                               @endforeach
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>

                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- End: Products Section -->

@endsection



