<!DOCTYPE html>
<html lang="en">


<!-- HRS/index-18.html  22 Nov 2019 10:00:41 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Online Marketing Agency</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="HRS - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    {{--    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">--}}
    <link rel="manifest" href="assets/images/icons/site.html">
    <link rel="mask-icon" href="assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="assets/images/icons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="HRS">
    <meta name="application-name" content="HRS">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup/magnific-popup.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/demos/demo-18.css">
</head>

<body>
<div class="page-wrapper">
    <header class="header header-11">
        <div class="header-middle sticky-header">
            <div class="container">
                <div class="header-left">
                    <nav class="main-nav">
                        <ul class="menu sf-arrows">
                            <li class="megamenu-container active">
                                <a href="/home">Home</a>
                            </li>

                            <li>
                                <a href="/productCategory">Packages</a>
                            </li>

                            {{--                            <li><a href="#">Buy HRS</a></li>--}}
                        </ul><!-- End .menu -->
                    </nav><!-- End .main-nav -->

                    <button class="mobile-menu-toggler">
                        <span class="sr-only">Toggle mobile menu</span>
                        <i class="icon-bars"></i>
                    </button>
                </div><!-- End .header-left -->

                <div class="header-center">
                    <a href="/home" class="logo">
                        <img src="assets/images/demos/demo-18/logo.png" alt="OMA Logo" width="124" height="35">
                    </a>
                </div><!-- End .header-center -->

                <div class="header-right">
                    <div class="header-search header-search-extended header-search-visible">
                        <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                        <form action="#" method="get">
                            <div class="header-search-wrapper">
                                <label for="q" class="sr-only">Search</label>
                                <input type="search" class="form-control" name="q" id="q"
                                       placeholder="Search product ..." required>
                                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                            </div><!-- End .header-search-wrapper -->
                        </form>
                    </div><!-- End .header-search -->

                    <a href="#" class="wishlist-link">
                        <i class="icon-heart-o"></i>
                        <span
                            class="wishlist-count">{{$count = \App\Wishlist::where([['creator', '=', Auth::user()->name]])->count()}}</span>
                    </a>


                    <div class="dropdown cart-dropdown">
                        <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false" data-display="static">
                            <i class="icon-shopping-cart"></i>
                            <span
                                class="cart-count"> {{$count = \App\Cart::where([['creator', '=', Auth::user()->name]])->count()}}</span>

                            {{--                            <span--}}
                            {{--                                class="cart-count">--}}

                            {{--                                 @foreach ($cart as $val)--}}
                            {{--                                    {{$val->index()->count()}}--}}
                            {{--                                @endforeach--}}
                            {{--                            </span>--}}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">

                            <div class="dropdown-cart-products">
                                @foreach($cart as $val)
                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="">Product ID :{{$val->product_id}}</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">{{$val->quantity}}</span>
                                                x {{$val->price}}
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="assets/images/products/cart/product-1.jpg" alt="product">
                                            </a>
                                        </figure>
                                        <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                    </div><!-- End .product -->

                                @endforeach
                            </div><!-- End .cart-product -->

                            <div class="dropdown-cart-total">
                                <span>Total</span>
                                <span class="cart-total-price">{{$val->price*$val->quantity}}</span>

                            </div><!-- End .dropdown-cart-total -->

                            <div class="dropdown-cart-action">

                            </div><!-- End .dropdown-cart-total -->

                        </div><!-- End .dropdown-menu -->

                    </div><!-- End .cart-dropdown -->

                </div><!-- End .header-right -->
            </div><!-- End .container -->
        </div><!-- End .header-middle -->
    </header><!-- End .header -->

    <main class="main">
        <div class="intro-slider-container mb-3 mb-lg-5">
            <div class="intro-slider owl-carousel owl-theme owl-nav-inside owl-light" data-toggle="owl"
                 data-owl-options='{"dots": true, "nav": false}'>
                @foreach($slider as $val)
                    {{--                    <div class="intro-slide"--}}
                    {{--                         style="background-image: url(assets/images/demos/demo-18/slider/slide-1.jpg);">--}}
                    {{--                        <div class="container">--}}
                    {{--                            <div class="intro-content text-center">--}}
                    {{--                                <h3 class="intro-subtitle cross-txt text-primary">SEASONAL PICKS</h3>--}}
                    {{--                                <!-- End .h3 intro-subtitle -->--}}
                    {{--                                <h1 class="intro-title text-white">Heritage Rajsahi Silk</h1><!-- End .intro-title -->--}}
                    {{--                                <div class="intro-text text-white">up to 70% off</div><!-- End .intro-text -->--}}
                    {{--                                <div class="intro-action cross-txt">--}}
                    {{--                                    <a href="category.html" class="btn btn-outline-white">--}}
                    {{--                                        <span>Discover More</span>--}}
                    {{--                                    </a>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div><!-- End .intro-content -->--}}
                    {{--                    </div><!-- End .intro-slide -->--}}

                    {{--                    <div class="intro-slide"--}}
                    {{--                         style="background-image: url(assets/images/demos/demo-18/slider/slide-2.jpg);">--}}
                    {{--                        <div class="container">--}}
                    {{--                            <div class="intro-content text-center">--}}
                    {{--                                <h3 class="intro-subtitle text-primary cross-txt">Women's Accessories</h3>--}}
                    {{--                                <!-- End .h3 intro-subtitle -->--}}
                    {{--                                <h1 class="intro-title text-white">Traditional Silk of Rajshahi</h1>--}}
                    {{--                                <!-- End .intro-title -->--}}
                    {{--                                <div class="intro-text text-white">30-50% off</div><!-- End .intro-text -->--}}
                    {{--                                <div class="intro-action cross-txt">--}}
                    {{--                                    <a href="category.html" class="btn btn-outline-white">--}}
                    {{--                                        <span>Discover More</span>--}}
                    {{--                                    </a>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div><!-- End .intro-content -->--}}
                    {{--                    </div><!-- End .intro-slide -->--}}
                    {{--                    <div class="intro-slide">--}}
                    <div class="intro-slide"
                         style="background-image: url(categorypic/{{$val['slider_image']}});">
                        {{--                        <img src="categorypic/{{$val['slider_image']}}" alt="No image">--}}
                        <div class="container">
                            <div class="intro-content text-center">
                                <h3 class="intro-subtitle text-primary cross-txt">{{$val->type}}</h3>
                                <!-- End .h3 intro-subtitle -->
                                <h1 class="intro-title text-white">{{$val->slider_name}}</h1>
                                <!-- End .intro-title -->
                                <div class="intro-text text-white">{{$val->discount}} off</div><!-- End .intro-text -->
                                <div class="intro-action cross-txt">
                                    <a href="category.html" class="btn btn-outline-white">
                                        <span>{{$val->slider_details}}</span>
                                    </a>
                                </div>
                            </div>
                        </div><!-- End .intro-content -->
                    </div><!-- End .intro-slide -->
                @endforeach
            </div><!-- End .intro-slider owl-carousel owl-simple -->

            <span class="slider-loader text-white"></span><!-- End .slider-loader -->
        </div><!-- End .intro-slider-container -->

        <div class="container banners">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner banner-hover">
                        <a href="#">
                            <img src="assets/images/demos/demo-18/banners/banner-1.jpg" alt="Banner">
                        </a>

                        <div class="banner-content">
                            <h3 class="banner-title text-white"><a href="#">Facebook Marketing</a></h3>
                            <!-- End .banner-title -->
                            <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                        </div><!-- End .banner-content -->
                    </div><!-- End .banner -->
                </div><!-- End .col-lg-6 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="banner banner-hover">
                        <a href="#">
                            <img src="assets/images/demos/demo-18/banners/banner-2.jpg" alt="Banner">
                        </a>

                        <div class="banner-content">
                            <h3 class="banner-title text-white"><a href="#">Instagram Marketing</a></h3>
                            <!-- End .banner-title -->
                            <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                        </div><!-- End .banner-content -->
                    </div><!-- End .banner -->
                </div><!-- End .col-sm-6 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="banner banner-hover">
                        <a href="#">
                            <img src="assets/images/demos/demo-18/banners/banner-3.jpg" alt="Banner">
                        </a>

                        <div class="banner-content">
                            <h3 class="banner-title text-white"><a href="#">Affiliate Marketing</a></h3>
                            <!-- End .banner-title -->
                            <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                        </div><!-- End .banner-content -->
                    </div><!-- End .banner -->

                    <div class="banner banner-hover">
                        <a href="#">
                            <img src="assets/images/demos/demo-18/banners/banner-4.jpg" alt="Banner">
                        </a>

                        <div class="banner-content">
                            <h3 class="banner-title text-white"><a href="#">Digital Marketing</a></h3>
                            <!-- End .banner-title -->
                            <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                        </div><!-- End .banner-content -->
                    </div><!-- End .banner -->
                </div><!-- End .col-sm-6 -->
            </div><!-- End .row -->
        </div><!-- End .container -->

        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <h2 class="title">Recent Arrivals</h2><!-- End .title -->
                    <div class="products-container mb-7">
                        <div class="row justify-content-center">
                            @foreach($product as $val)
                                <div class="col-6 col-md-4">
                                    <div class="product product-4">
                                        <figure class="product-media">
                                            <a href="/showproduct{{$val->id}}">
                                                <img src="categorypic/{{$val['product_image1']}}" alt="No image found"
                                                     class="product-image" width="277px" height="377px">
                                                <img src="categorypic/{{$val['product_image2']}}" alt="No image found"
                                                     class="product-image-hover" width="277px" height="377px">
                                            </a>

                                            <div class="product-action-vertical">
                                                <form action="/wishList{{$val->id}}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{$val->id}}">
                                                    <input type="hidden" name="price" value="{{$val->product_price}}">
                                                    <button class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span>
                                                    </button>
                                                </form>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                                   title="Quick view"><span>Quick view</span></a>
                                            </div><!-- End .product-action -->

                                            <form action="/addToCart{{$val->id}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{$val->id}}">
                                                <input type="hidden" name="price" value="{{$val->product_price}}">
                                                <div class="product-action">
                                                    <button
                                                        class="btn-product btn-cart"><span>add to cart</span></button>
                                                </div><!-- End .product-action -->
                                            </form>
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Sarees</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">{{$val->product_name}}</a>
                                            </h3><!-- End .product-title -->
                                            <span class="old-price">Was {{$val->product_price}}</span>
                                            <div class="product-price">

                                                Now {{$val->product_price-(($val->product_price*$val->discount)/100)}}
                                                $
                                            </div><!-- End .product-price -->
                                            <div class="product-nav product-nav-dots">
                                                <a href="#" class="active" style="background: #e5dcb1;"><span
                                                        class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #bacbd8;"><span class="sr-only">Color name</span></a>
                                            </div><!-- End .product-nav -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 -->
                            @endforeach
                        </div><!-- End .row -->

                        <div class="more-container text-center mt-0 mb-0">
                            <a href="/productCategory" class="btn btn-outline-primary-2 btn-more">
                                <span>View more Package</span>
                            </a>
                        </div><!-- End .more-container -->
                    </div><!-- End .products -->
                </div><!-- End .col-lg-9 -->

                <aside class="col-lg-3">
                    <div class="sidebar sidebar-home">
                        <div class="row">
                            <div class="col-sm-6 col-lg-12">
                                <div class="widget widget-products">
                                    <h4 class="widget-title">Best Selling</h4><!-- End .widget-title -->
                                    @forelse($random2->slice(0, 5) as $val)
                                        <div class="products">
                                            <div class="product product-sm">
                                                <figure class="product-media">
                                                    <a href="/showproduct{{$val->id}}">
                                                        <img src="categorypic/{{$val['product_image2']}}"
                                                             alt="Product image" class="product-image">
                                                    </a>
                                                </figure>

                                                <div class="product-body">
                                                    <div class="product-cat">
                                                        <a href="#">Clothing</a>
                                                    </div><!-- End .product-cat -->
                                                    <h5 class="product-title"><a
                                                            href="product.html">{{$val->product_name}}</a></h5>
                                                    <!-- End .product-title -->
                                                    <div class="product-price">

                                                        <span class="new-price">Now {{$val->product_price-(($val->product_price*$val->discount)/100)}} tk</span>
                                                        <span class="old-price">Was {{$val->product_price}}</span>
                                                    </div><!-- End .product-price -->
                                                </div><!-- End .product-body -->
                                            </div><!-- End .product product-sm -->


                                        </div><!-- End .products -->
                                        @endforeach
                                </div><!-- End .widget widget-products -->
                            </div><!-- End .col-sm-6 col-lg-12 -->

                            {{--                                <div class="col-sm-6 col-lg-12">--}}
                            {{--                                    <div class="widget widget-subscribe" style="background-image: url(assets/images/demos/demo-18/bg-newsletter.jpg);">--}}
                            {{--                                        <h2 class="widget-title">Sign up for email <br>& get 25% off </h2><!-- End .widget-title -->--}}
                            {{--                                        <p>Subcribe to get information about products and coupons</p>--}}

                            {{--                                        <form action="#">--}}
                            {{--                                            <input type="email" class="form-control" placeholder="Enter your Email Address" required>--}}

                            {{--                                            <input type="submit" class="btn btn-outline-white" value="Subscribe">--}}
                            {{--                                        </form>--}}
                            {{--                                        --}}
                            {{--                                    </div><!-- End .widget widget-banner -->--}}
                            {{--                                </div><!-- End .col-sm-6 col-lg-12 -->--}}

                            <div class="col-sm-6 col-lg-12">
                                <div class="widget widget-banner">
                                    <div class="banner banner-overlay">
                                        <a href="#">
                                            <img src="assets/images/demos/demo-18/banners/banner-5.jpg" alt="Banner">
                                        </a>

                                        <div class="banner-content">
                                            <h4 class="banner-subtitle"><a href="#">Spring 2019</a></h4>
                                            <!-- End .banner-title -->
                                            <h3 class="banner-title"><a href="#">SAVE UP TO <br>50% OFF</a></h3>
                                            <!-- End .banner-title -->
                                            <a href="#" class="banner-link">Shop Now</a>
                                        </div><!-- End .banner-content -->
                                    </div><!-- End .banner -->
                                </div><!-- End .widget widget-banner -->
                            </div><!-- End .col-sm-6 col-lg-12 -->


                        </div><!-- End .row -->
                    </div><!-- End .sidebar sidebar-home -->
                </aside><!-- End .col-lg-3 -->
            </div><!-- End .row -->

            <hr class="mt-0 mb-4">
            <h2 class="title text-center brands">Shop by Brands</h2><!-- End .title -->

            <div class="owl-carousel mt-3 mb-4 owl-simple" data-toggle="owl"
                 data-owl-options='{
                        "nav": false,
                        "dots": true,
                        "margin": 30,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "420": {
                                "items":3
                            },
                            "600": {
                                "items":4
                            },
                            "900": {
                                "items":5
                            },
                            "1024": {
                                "items":6
                            },
                            "1200": {
                                "items":6,
                                "nav": true,
                                "dots": false
                            }
                        }
                    }'>
                <a href="#" class="brand">
                    <img src="assets/images/brands/1.png" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="assets/images/brands/2.png" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="assets/images/brands/3.png" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="assets/images/brands/4.png" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="assets/images/brands/5.png" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="assets/images/brands/6.png" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="assets/images/brands/7.png" alt="Brand Name">
                </a>
            </div><!-- End .owl-carousel -->
        </div><!-- End .container -->
    </main><!-- End .main -->

    <footer class="footer footer-dark">
        <div class="icon-boxes-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="icon-box icon-box-side">
                                <span class="icon-box-icon">
                                    <i class="icon-rocket"></i>
                                </span>

                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Free Shipping</h3><!-- End .icon-box-title -->
                                <p>Orders $50 or more</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="icon-box icon-box-side">
                                <span class="icon-box-icon">
                                    <i class="icon-rotate-left"></i>
                                </span>

                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Free Returns</h3><!-- End .icon-box-title -->
                                <p>Within 30 days</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="icon-box icon-box-side">
                                <span class="icon-box-icon">
                                    <i class="icon-info-circle"></i>
                                </span>

                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Get 20% Off 1 Item</h3><!-- End .icon-box-title -->
                                <p>When you sign up</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="icon-box icon-box-side">
                                <span class="icon-box-icon">
                                    <i class="icon-life-ring"></i>
                                </span>

                            <div class="icon-box-content">
                                <h3 class="icon-box-title">We Support</h3><!-- End .icon-box-title -->
                                <p>24/7 amazing services</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-sm-6 col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .icon-boxes-container -->
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="widget widget-about">
                            <img src="assets/images/demos/demo-18/logo.png" alt="OMA Logo" width="124" height="35">
                            <p>Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, eu vulputate magna
                                eros eu erat. </p>

                            <div class="social-icons">
                                <a href="#" class="social-icon" title="Facebook" target="_blank"><i
                                        class="icon-facebook-f"></i></a>
                                <a href="#" class="social-icon" title="Twitter" target="_blank"><i
                                        class="icon-twitter"></i></a>
                                <a href="#" class="social-icon" title="Instagram" target="_blank"><i
                                        class="icon-instagram"></i></a>
                                <a href="#" class="social-icon" title="Youtube" target="_blank"><i
                                        class="icon-youtube"></i></a>
                                <a href="#" class="social-icon" title="Pinterest" target="_blank"><i
                                        class="icon-pinterest"></i></a>
                            </div><!-- End .soial-icons -->
                        </div><!-- End .widget about-widget -->
                    </div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="widget">
                            <h4 class="widget-title">Useful Links</h4><!-- End .widget-title -->

                            <ul class="widget-list">
                                <li><a href="about.html">About OMA</a></li>
                                <li><a href="#">How to shop on OMA</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="contact.html">Contact us</a></li>
                                <li><a href="{{url('/login')}}">Log in</a></li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
{{--                                <li><a href="{{route('logout')}}">Log Out</a></li>--}}
                            </ul><!-- End .widget-list -->
                        </div><!-- End .widget -->
                    </div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="widget">
                            <h4 class="widget-title">Customer Service</h4><!-- End .widget-title -->

                            <ul class="widget-list">
                                <li><a href="#">Payment Methods</a></li>
                                <li><a href="#">Money-back guarantee!</a></li>
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">Shipping</a></li>
                                <li><a href="#">Terms and conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul><!-- End .widget-list -->
                        </div><!-- End .widget -->
                    </div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="widget">
                            <h4 class="widget-title">My Account</h4><!-- End .widget-title -->

                            <ul class="widget-list">
                                {{--                                <li><a href="{{'/login'}}">Sign In</a></li>--}}
                                <li><a href="cart.html">View Cart</a></li>
                                <li><a href="#">My Wishlist</a></li>
                                <li><a href="#">Track My Order</a></li>
                                <li><a href="#">Help</a></li>
                            </ul><!-- End .widget-list -->
                        </div><!-- End .widget -->
                    </div><!-- End .col-sm-6 col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .footer-middle -->

        <div class="footer-bottom">
            <div class="container">
                <p class="footer-copyright">Copyright © 2022 OMA Store. All Rights Reserved.</p>
                <!-- End .footer-copyright -->
                <figure class="footer-payments">
                    <img src="assets/images/payments.png" alt="Payment methods" width="272" height="20">
                </figure><!-- End .footer-payments -->
            </div><!-- End .container -->
        </div><!-- End .footer-bottom -->
    </footer><!-- End .footer -->
</div><!-- End .page-wrapper -->
<button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

<!-- Mobile Menu -->
<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

<div class="mobile-menu-container">
    <div class="mobile-menu-wrapper">
        <span class="mobile-menu-close"><i class="icon-close"></i></span>

        <form action="#" method="get" class="mobile-search">
            <label for="mobile-search" class="sr-only">Search</label>
            <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..."
                   required>
            <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
        </form>


        <div class="social-icons">
            <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
        </div><!-- End .social-icons -->
    </div><!-- End .mobile-menu-wrapper -->
</div><!-- End .mobile-menu-container -->


<!-- Plugins JS File -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.hoverIntent.min.js"></script>
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/superfish.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/bootstrap-input-spinner.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!-- Main JS File -->
<script src="assets/js/main.js"></script>
<script src="assets/js/demos/demo-18.js"></script>
<script src="assets/js/demos/demo-18.js"></script>
</body>


<!-- HRS/index-18.html  22 Nov 2019 10:00:57 GMT -->
</html>
