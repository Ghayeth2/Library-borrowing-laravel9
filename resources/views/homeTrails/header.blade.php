<!-- Start: Header Section -->
<header id="header-v1" class="navbar-wrapper">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-default">
                <div class="row">
                    <div class="col-md-3">
                        <div class="navbar-header">
                            <div class="navbar-brand">
                                <h1>
                                    <a href="index-2.html">
                                        <img src="{{asset("assets")}}/images/libraria-logo-v1.png" alt="LIBRARIA" />
                                    </a>
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <!-- Header Topbar -->
                        <div class="header-topbar hidden-sm hidden-xs">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="topbar-info">
                                        @auth
                                            <a href="mailto:support@libraria.com"><i class="fa fa-user">

                                                </i>{{\Illuminate\Support\Facades\Auth::user()->name}}</a>


                                        <span>/</span>
                                            <a href="{{route('userlogout')}}"><i class="fa fa-arrow-left"></i>Logout</a>

                                        @endauth
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="topbar-links">
                                        @guest
                                        <a href="/userlogin"><i class="fa fa-lock"></i>Login / <a href="/userregister">Register</a></a>
                                        @endguest
                                        <span>|</span>

                                        <div class="header-cart dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                                <i class="fa fa-shopping-cart"></i>
                                                <small>0</small>
                                            </a>
                                            <div class="dropdown-menu cart-dropdown">
                                                <ul>
                                                    <li class="clearfix">
                                                        <img src="{{asset("assets")}}/images/header-cart-image-01.jpg" alt="cart item" />
                                                        <div class="item-info">
                                                            <div class="name">
                                                                <a href="#">The Great Gatsby</a>
                                                            </div>
                                                            <div class="author"><strong>Author:</strong> F. Scott Fitzgerald</div>
                                                            <div class="price">1 X $10.00</div>
                                                        </div>
                                                        <a class="remove" href="#"><i class="fa fa-trash-o"></i></a>
                                                    </li>
                                                    <li class="clearfix">
                                                        <img src="{{asset("assets")}}/images/header-cart-image-02.jpg" alt="cart item" />
                                                        <div class="item-info">
                                                            <div class="name">
                                                                <a href="#">The Great Gatsby</a>
                                                            </div>
                                                            <div class="author"><strong>Author:</strong> F. Scott Fitzgerald</div>
                                                            <div class="price">1 X $10.00</div>
                                                        </div>
                                                        <a class="remove" href="#"><i class="fa fa-trash-o"></i></a>
                                                    </li>
                                                    <li class="clearfix">
                                                        <img src="{{asset("assets")}}/images/header-cart-image-03.jpg" alt="cart item" />
                                                        <div class="item-info">
                                                            <div class="name">
                                                                <a href="#">The Great Gatsby</a>
                                                            </div>
                                                            <div class="author"><strong>Author:</strong> F. Scott Fitzgerald</div>
                                                            <div class="price">1 X $10.00</div>
                                                        </div>
                                                        <a class="remove" href="#"><i class="fa fa-trash-o"></i></a>
                                                    </li>
                                                </ul>
                                                <div class="cart-total">
                                                    <div class="title">SubTotal</div>
                                                    <div class="price">$30.00</div>
                                                </div>
                                                <div class="cart-buttons">
                                                    <a href="{{route('borrowindex')}}" class="btn btn-dark-gray">View Cart</a>
                                                    <a href="checkout.html" class="btn btn-primary">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="navbar-collapse hidden-sm hidden-xs">
                            <ul class="nav navbar-nav">
                                <li><a  href="{{route('home')}}">Home</a></li>
                                <li class="dropdown">
                                    @php
                                        $mainCategories = \App\Http\Controllers\Maincontroller::maincategorylist();
                                    @endphp
                                    <a data-toggle="dropdown" class="dropdown-toggle disabled" href="books-media-list-view.html">Categories</a>
                                    <ul class="dropdown-menu">
                                        @foreach($mainCategories as $row)
                                        <li class="dropdown ">
                                            <a  href="" style="text-decoration-color: black;  " >{{$row->title}}</a>
                                            <ul class="dropdown-menu">
                                                @if(count($row->children))
                                                    @include('homeTrails.categorytree',['children'=>$row->children])
                                                @endif
                                            </ul>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a  href="{{route('about')}}">About</a></li>
                                <li><a href="{{route('references')}}">References</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                                <li><a href="{{route('faq')}}">FAQ</a></li>
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle disabled" href="#">User</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{route('userPanel.index')}}">Profile</a></li>
                                        <li><a href="{{route('userPanel.books')}}">My Books</a></li>
                                        <li><a href="home-v2.html">Saved Books</a></li>
                                        <li><a href="{{route('userPanel.reviews')}}">My Reviews</a></li>
                                        <li><a href="{{route('userlogout')}}">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mobile-menu hidden-lg hidden-md">
                    <a href="#mobile-menu"><i class="fa fa-navicon"></i></a>
                    <div id="mobile-menu">
                        <ul class="nav navbar-nav">
                            <li><a  href="{{route('home')}}">Home</a></li>
                            <li class="dropdown">
                                @php
                                    $mainCategories = \App\Http\Controllers\Maincontroller::maincategorylist()
                                @endphp
                                <h6 class="m-0">Categories</h6>
                                <i class="fa fa-angle-down text-dark"></i>
                                </a>

                                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1;">
                                    @foreach($mainCategories as $rs)


                                        <div class="navbar-nav w-100 overflow-hidden" style="height: 390px">

                                            <div class="nav-item dropdown">

                                                <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                                    @if(count($rs->children))
                                                        @include('homeTrails.categorytree',['children' => $rs->children])
                                                    @endif
                                                </div>
                                                <a href="#" class="nav-item nav-link" data-toggle="dropdown">{{$rs->title}} <i class="fa fa-angle-down float-right mt-1"></i></a>
                                                <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                                </div>

                                            </div>
                            @endforeach
                                </ul>
                            </li>
                            <li><a  href="{{route('about')}}">About</a></li>
                            <li><a href="{{route('references')}}">References</a></li>
                            <li><a href="{{route('contact')}}">Contact</a></li>
                            <li class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle disabled" >User</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('userPanel.index')}}">Profile</a></li>
                                    <li><a href="index-2.html">My Books</a></li>
                                    <li><a href="home-v2.html">Saved Books</a></li>
                                    <li><a href="{{route('userPanel.reviews')}}">My Reviews</a></li>
                                    <li><a href="{{route('userlogout')}}">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- End: Header Section -->
