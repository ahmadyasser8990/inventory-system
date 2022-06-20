<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@lang('site.company_name')</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{asset('homepage/css/bootstrap.css')}}" />

    <!-- Custom styles for this template -->
    <link href="{{asset('homepage/css/style.css')}}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{asset('homepage/css/responsive.css')}}" rel="stylesheet" />



    <link href="https://fonts.googleapis.com/css?family=Cairo:400,700" rel="stylesheet">

        <style>
            body, h1, h2, h3, h4, h5, h6, span, a {
                font-family: 'Cairo', sans-serif !important;
            }
        </style>
</head>

<body>


    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="index.html">
                        <!-- <img src="images/logo.png" alt=""> -->
                        <span>
                    روائع المسات الماسية
                  </span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                            <ul class="navbar-nav  ">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ url('/home') }}">الرايسية <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">تسجيل دخول</a>
                                </li>
                            </ul>

                        </div>
                        <div class="quote_btn-container ">
                            <a href="">
                                <img src="{{asset('homepage/images/cart.png')}}" alt="">
                                <div class="cart_number">
                                    0
                                </div>
                            </a>
                            <form class="form-inline">
                                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
        <!-- slider section -->
        <section class=" slider_section position-relative">
            <div class="design-box">
                <img src="{{asset('homepage/images/design-1.png')}}" alt="">
            </div>

            <div class="container">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="detail_box">
                                        <h2>
                                            <span>  تصاميم مجموهرات </span>
                                            <hr>
                                        </h2>
                                        <h1>
                                            جديده
                                        </h1>
                                        <p>
                                            Lorem ipsum dolor sit amet consec tetur adipiscing elit elit at felislacinia aptent taciti sociosqu ad litora torquent per conubia nostra
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="img-box">
                                        <img src="{{asset('homepage/images/slider-img.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="detail_box">
                                        <h2>
                                            <span> New Collection</span>
                                            <hr>
                                        </h2>
                                        <h1>
                                            Jewellery
                                        </h1>
                                        <p>
                                            Lorem ipsum dolor sit amet consec tetur adipiscing elit elit at felislacinia aptent taciti sociosqu ad litora torquent per conubia nostra
                                        </p>
                                        <div>
                                            <a href="">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="img-box">
                                        <img src="{{asset('homepage/images/slider-img.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="detail_box">
                                        <h2>
                                            <span> New Collection</span>
                                            <hr>
                                        </h2>
                                        <h1>
                                            Jewellery
                                        </h1>
                                        <p>
                                            Lorem ipsum dolor sit amet consec tetur adipiscing elit elit at felislacinia aptent taciti sociosqu ad litora torquent per conubia nostra
                                        </p>
                                        <div>
                                            <a href="">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="img-box">
                                        <img src="{{asset('homepage/images/slider-img.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- end slider section -->
    </div>


    <!-- about section -->

    <section class="about_section layout_padding2-top layout_padding-bottom">
        <div class="design-box">
            <img src="{{asset('homepage/images/design-2.png')}}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                نبذ عن البرنامج الحسابي السحابي
                            </h2>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="{{asset('homepage/images/about-img.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end about section -->

    <!-- contact section -->

    <section class="contact_section layout_padding">
        <div class="design-box">
            <img src="{{asset('homepage/images/design-2.png')}}" alt="">
        </div>
        <div class="container ">
            <div class="">
                <h2 class="">
                    الموقع
                </h2>
            </div>

        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="map_container">
                        <div class="map-responsive">
                            <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end contact section -->

    <!-- info section -->
    <section class="info_section ">
        <div class="container">
            <div class="info_container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="info_logo">
                            <a href="">
                                <span style="    text-align: center;">
                        روائع المسات الماسية
                      </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info_contact">
                            <a href="">
                                <img src="{{asset('homepage/images/location.png')}}" alt="">
                                <span>
                        العنوان
                      </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info_contact">
                            <a href="">
                                <img src="{{asset('homepage/images/phone.png')}}" alt="">
                                <span>
                        +01 1234567890
                      </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info_contact">
                            <a href="">
                                <img src="{{asset('homepage/images/mail.png')}}" alt="">
                                <span>
                                    ahmadyasser8990@gmail.com
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="info_social">
                    <div class="d-flex justify-content-center">
                        <h5 class="info_heading">
                            تابعنا على
                        </h5>
                    </div>
                    <div class="social_box">
                        <a href="">
                            <img src="{{asset('homepage/images/twitter.png')}}" alt="">
                        </a>
                        <a href="">
                            <img src="{{asset('homepage/images/insta.png')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end info_section -->

    <!-- footer section -->
    <section class="container-fluid footer_section">
        <p>
            &copy; <span id="displayYear"></span> All Rights Reserved By
            <a href="https://html.design/">Ahmed Yasser</a>
        </p>
    </section>
    <!-- footer section -->



    {{--
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                          {{ config('app.name', 'Laravel') }}
                      </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                          <span class="navbar-toggler-icon"></span>
                      </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                          {{ Auth::user()->name }} <span class="caret"></span>
                                      </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                           document.getElementById('logout-form').submit();">
                                              {{ __('Logout') }}
                                          </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div> --}}

    <script type="text/javascript" src="{{asset('homepage/js/jquery-3.4.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('homepage/js/custom.js')}}"></script>
    <script type="text/javascript" src="{{asset('homepage/js/bootstrap.js')}}"></script>
</body>

</html>
