@extends('layouts.app')

@section('header')
@include('layouts.header')
@endsection

@section('content')
<main class="eu-margin">
    <div id="homeBanner" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#homeBanner" data-slide-to="0" class="active"></li>
            <li data-target="#homeBanner" data-slide-to="1"></li>
            <li data-target="#homeBanner" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div id="car-item-1" class="carousel-item active">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-8 col-lg-7">
                                <h1 class="car-cap-h">IoT Flood Monitoring Devices</h1>
                                <p class="car-cap-p text-justify">Our award-wining products are designed to detect the water level changes so you have an actionable information when you need it the most.</p>
                                <a class="btn btn-sm car-cap-a" href="{{ route('aboutUs') }}">SEE MORE</a>
                            </div>
                            <div class="d-none d-md-block col-md-4 offset-lg-1 col-lg-3">
                                <img class="img-responsive car-cap-i" src="img/slide3.png"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="car-item-2" class="carousel-item">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-6 col-lg-6">
                                <h1 class="car-cap-h">From Prototype to the Solution</h1>
                                <p class="car-cap-p text-justify">Competitive “know-how” knowledge in developing high quality, rugged and state-of-the-art IoT devices tailored to your needs.</p>
                                <a class="btn btn-sm car-cap-a" href="{{ route('aboutUs') }}">SEE MORE</a>
                            </div>
                            <div class="d-none d-md-block col-md-6 offset-lg-1 col-lg-5">
                                <img class="img-responsive car-cap-i" src="/img/pcb-development.png"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="car-item-3" class="carousel-item">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-6 col-lg-5">
                                <h1 class="car-cap-h">Custom IoT solutions</h1>
                                <p class="car-cap-p text-justify">We provide professional assistance for solving real-world problems with IoT solutions.</p>
                                <a class="btn btn-sm car-cap-a" href="{{ route('aboutUs') }}">SEE MORE</a>
                            </div>
                            <div class="d-none d-md-block col-md-6 col-lg-7">
                                <img class="img-responsive car-cap-i" src="/img/custom-iot-solutions.png"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="featured-partners">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="owl-carousel owl-theme">
                    <div class="item"><a href="#"><img class="img-responsive" src="/img/also.png"/></a></div>
                    <div class="item"><a href="#"><img class="img-responsive" src="img/a1.png"/></a></div>
                    <div class="item"><a href="#"><img class="img-responsive" src="/img/aquobex.png"/></a></div>
                    <div class="item"><a href="#"><img class="img-responsive" src="img/allthingstalk.png"/></a></div>
                    <div class="item"><a href="#"><img class="img-responsive" src="img/sigfox.png"/></a></div>
                </div>
			</div>
        </div>
    </div>
    <div id="featured-services" class="main-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="main-section-title">
                        <p class="subheading">WE CREATE SOLUTIONS FOR YOU</p>
                        <h2 class="heading"> Our most prominent business <span>services</span></h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="ft-service-box">
                                <i class="icon-ft-1" ></i>
                                <div class="ft-service-box-caption">
                                    <h5>Flood Expert Consultancy</h5>
                                    <p>Professional consultancy for any flood-related inquiries</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="ft-service-box">
                                <i class="icon-ft-2" ></i>
                                <div class="ft-service-box-caption">
                                    <h5>IoT Software Solutions</h5>
                                    <p>Interactive and top-notch platform for Disaster Management Centres</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="ft-service-box">
                                <i class="icon-ft-3" ></i>
                                <div class="ft-service-box-caption">
                                    <h5>IoT Devices</h5>
                                    <p>State-of-the-art IoT devices for flood detection and monitoring</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="featured-twoservices" class="main-section">
        <div class="container">
            <div class="row two-service-section align-items-center">
                <div class="col-12 col-md-6">
                    <img class="img-responsive" src="/img/ireact-platform.png" alt="">
                </div>
                <div class="col-12 col-md-5 offset-md-1">
                    <div class="row no-gutters">
                        <div class="col-12">
                            <div class="main-section-title-side">
                                <p class="subheading">GOVERNMENTAL & INSTITUTIONAL USE</p>
                                <h2 class="heading">World-class DRM platform for mitigating fatalities and damage costs from the flood events</h2>
                                <h5 class="heading-sm">I-REACT platform and a free mobile app are a complete solution for Disaster Management centres, for improving response time and reduce overall costs from hazardous events.</h5>
                            </div>
                        </div>
                        <div class="col-12">
                            <p>A smartphone application and IoT devices are integrated with the platform, offering the best possible field data back and forth, thus making the solution related to the real situation.</p>
                        </div>
                        <div class="col-12">
                            <a href="{{ route('solutions') }}" class="btn btn-pink">See More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row two-service-section align-items-center two-service-section-gap">
                <div class="col-12 col-md-6 order-md-2 offset-md-1">
                    <img class="img-responsive" src="/img/symbiotic-platform.png" alt="">
                </div>
                <div class="col-12 col-md-5 order-md-1">
                    <div class="row no-gutters">
                        <div class="col-12">
                            <div class="main-section-title-side">
                                <p class="subheading">KICKSTART YOUR IOT PROJECT</p>
                                <h2 class="heading">IoT Platform for SMEs / engineers / hobbyists</h2>
                                <h5 class="heading-sm">Connect our IoT devices or the new ones we develop for you to ready-to-use competitive IoT Platform and stay ahead with your solution.</h5>
                            </div>
                        </div>
                        <div class="col-12">
                            <p>We provide you with the complete onboarding process, prepare the devices data in the platform and assist you to use the platform at its best.<br><br>You can also share the data to your co-workers or publicly with a single button!</p>
                        </div>
                        <div class="col-12">
                            <a href="{{ route('solutions') }}" class="btn btn-pink">See More Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-color-video">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-color-video-title">
                        <p class="subheading">DIRECTOR'S CUT</p>
                        <h2 class="heading">SymbIoTic presents its solution on the Croatian national television</h2>
                    </div>
                    <div class="play-btn-area text-center">
                        <a href="https://www.youtube.com/embed/SVZTiEw3E-8"><i class="fa fa-play play-btn"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--
    <div id="color-section" class="main-section main-section-color">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="main-section-title">
                        <p class="subheading-color">DIRECTOR'S CUT</p>
                        <h2 class="heading">SymbIoTic's coverage on Croatian National TV station</h2>
                    </div>
                </div>
                <div class="col-8 offset-2">
                    <div class="embed-responsive embed-responsive-16by9 video-container">
                    <iframe class="video embed-responsive-item" src="https://www.youtube.com/embed/SVZTiEw3E-8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    -->

    <div id="featured-blog-posts" class="main-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="main-section-title">
                        <p class="subheading">ON THE RECORD</p>
                        <h2 class="heading">The latest news and upcoming <span>events</span></h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row no-gutters">
                        @if ($posts->count())
                            @foreach($posts as $post)
                            <div class="col-12 col-sm-6 col-md-4">
                                <a href="{{ route('posts.show', $post->id) }}">
                                    <div class="ft-blog-box">
                                        <div class="ft-img-wrapper" style="background-image:url(/images/{{ $post->image }})"></div>
                                        <div class="ft-blog-box-caption">
                                            <h5>{{ $post->title }}</h5>
                                            <div class="row align-items-center justify-content-between">
                                                <small><span><img width="40" height="40" src="https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659651_1280.png" alt=""></span>{{ $post->user->name }}</small>
                                                <small><span><i class="fa fa fa-clock-o fa-blog-clock"></i></span>{{ $post->created_at->format('d.m.Y.') }}</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        @else
                        <div class="col-12">
                            <p class="text-center">There are no posts at this moment.</p>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@section('footer')
@include('layouts.footer')
@endsection