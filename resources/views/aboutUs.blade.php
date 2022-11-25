@extends('layouts.app')

@section('header')
@include('layouts.header')
@endsection

@section('content')
<main>
    <div class="banner-container">
        <div class="container banner-area">
            <div class="row h-100">
                <div class="col-12 my-auto">
                    <div class="banner-title-area">
                        <h2 class="banner-title">About Us</h2>
                        <p class="banner-subtitle">Home <span><i class="fa fa-angle-right"></i></span> About Us</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="featured-twoservices" class="main-section">
        <div class="container">
            <div class="row two-service-section align-items-center">
                <div class="col-12 col-md-6 col-lg-5 order-md-2 offset-lg-1 mb-3">
                    <img class="img-responsive" src="img/symbiotic-logo.png" alt="">
                </div>
                <div class="col-12 col-md-6 order-md-1">
                    <div class="row no-gutters">
                        <div class="col-12">
                            <div class="main-section-title-side">
                                <p class="subheading">ABOUT US</p>
                                <h2 class="heading">What we are all <span>about</span></h2>
                            </div>
                        </div>
                        <div class="col-12">
                            <p class="text-justify">SymbIoTic has devoted all the efforts to help regions affected by any element of climate changes to reduce food & water scarcity, improving resilience to natural disasters, connecting poor regions with ones that are willing to help (especially for developing countries). Our work is focused to monitor environmental parameters (water level, temperature, humidity, vibration, etc.) and deliver the professional solutions with a quick and reliable response that relies on the integration with expert systems with an improved data analytics and visualisation.</p>
                        </div>
                    </div>
                </div>
                <!--
                <div class="col-12 order-md-3 mt-5">
                    <div class="row">
                        <div class="col-4">
                            <div class="mission-box">
                                <div class="mission-box-caption">
                                    <h5>Our Mission</h5>
                                    <p>Our mission is to develop economically affordable IoT devices and related network for different end users.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mission-box">
                                <div class="mission-box-caption">
                                    <h5>Our Strategy</h5>
                                    <p>Our mission is to develop economically affordable IoT devices and related network for different end users.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mission-box">
                                <div class="mission-box-caption">
                                    <h5>Who We Are</h5>
                                    <p>Our mission is to develop economically affordable IoT devices and related network for different end users.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                -->
            </div>
        </div>
    </div>

    <div class="main-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="main-section-title">
                        <p class="subheading">OUR SERVICES</p>
                        <h2 class="heading">Where our passion and ambition are <span>thriving</span></h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="service-box">
                                <i class="fa fa-gears fa-gradient"></i>
                                <div class="service-box-caption">
                                    <h5>IoT Development</h5>
                                    <p>Rapid and high-quality IoT devices development all the way from your idea to the device that enables your business need.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="service-box">
                            <i class="fa fa-stethoscope fa-gradient"></i>
                                <div class="service-box-caption">
                                    <h5>Solution Testing</h5>
                                    <p>Rigid and continuous testing to meet high standards, IP protection and ensure the stable device operation for years.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="service-box">
                                <i class="fa fa-flask fa-gradient"></i>
                                <div class="service-box-caption">
                                    <h5>Project Management</h5>
                                    <p>After we gather the solution requirements, we manage the whole project with you by the best ITIL 4 and CCSM standards.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="service-box">
                                <i class="fa fa-search fa-gradient"></i>
                                <div class="service-box-caption">
                                    <h5>Flood Monitoring</h5>
                                    <p>The end-to-end solutions for both governments, enterprises and organisations, but also for SMEs, engineers, hobbyists, etc.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="service-box">
                                <i class="fa fa-leaf fa-gradient"></i>
                                <div class="service-box-caption">
                                    <h5>Vertical Farming</h5>
                                    <p>Don’t be confused with this solution! We’ll use our devices to enable the indoor vertical farming with high yields. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="service-box">
                                <i class="fa fa-life-ring fa-gradient"></i>
                                <div class="service-box-caption">
                                    <h5>Advanced Support</h5>
                                    <p>We ensure the best-class support in the onboarding process, but also in all situations where you may need our assistance.</p>
                                </div>
                            </div>
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

    <div class="main-section">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-12 col-md-6">
                    <div class="main-section-title-side">
                        <p class="subheading">OUR TEAM</p>
                        <h2 class="heading">Devoted and goal driven <span>enthusiasts</span></h2>
                    </div>
                    <p class="text-justify">Founder is an indeed ambitious fellow since SymbIoTic already received a 200.000€ EU grant for developing state-of-the art IoT devices, enrolled a 4-years PhD course in Environmental Protection to gather a profound knowledge about floods. This devotion has already resulted with reliable partnerships, a gold medal at INOVA2020 conference, and a neat integration of psychological, philosophical and spiritual domains with technology. </p>
                    <p class="text-justify">We form a highly friendly, relaxed and thriving team with our Senior and Junior HW/SW developers. This EU grant has enabled SymbIoTic to hire two prominent and like-minded people where everything we do is to deliver and support reliable solutions to the target audience. </p>
                </div>
                <div class="col-12 col-md-6 col-lg-5 offset-lg-1 employees-list">
                        <div class="row">
                            <div class="col-12">
                                <div class="employees-box">
                                    <div class="row d-flex align-items-center">
                                        <div class="col-4">
                                            <img src="img/davor-symbiotic.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="col-8">
                                            <div class="employees-box-caption">
                                                <h5>Davor Predavec</h5>
                                                <p>Project Owner</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="employees-box">
                                    <div class="row d-flex align-items-center">
                                        <div class="col-4">
                                            <img src="img/john-doe.png" class="img-responsive" alt="">
                                        </div>
                                        <div class="col-8">
                                            <div class="employees-box-caption">
                                                <h5>Željko Krpetić</h5>
                                                <p>HW/SW Engineer</p>
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

    <div class="technologies-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="main-section-title">
                        <p class="subheading">UNDERLYING TECHNOLOGIES</p>
                        <h2 class="heading">Powered by cutting edge <span>technologies</span></h2>
                    </div>
                </div>
                <div class="col-6 col-sm-4 text-center">
                    <img class="img-responsive" src="https://le-cdn.website-editor.net/f2985373c87a4349b34f6b5f847a2e9e/dms3rep/multi/opt/I-React-Logo-ca494c6b-1440w.png" alt="">
                </div>
                <div class="col-6 col-sm-4 text-center">
                    <img class="img-responsive" src="https://d33wubrfki0l68.cloudfront.net/4c1518f0b5a0888c703d81dbd6fcd9eb5257c16d/42613/assets/img/sigfox-technology/sigfox-logo.png" alt="">
                </div>
                <div class="col-6 col-sm-4 text-center">
                    <img class="img-responsive" src="https://i0.wp.com/enterpriseiotinsights.com/wp-content/uploads/2019/07/nbiot_green_rgb.png?fit=1524%2C531&ssl=1" alt="">
                </div>
            </div>
        </div>
    </div>

</main>
@endsection

@section('footer')
@include('layouts.footer')
@endsection