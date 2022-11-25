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
                        <h2 class="banner-title">Solutions</h2>
                        <p class="banner-subtitle">Home <span><i class="fa fa-angle-right"></i></span> Solutions</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 mb-3">
                    <div class="solutions-box">
                        <div class="row no-gutters">
                            <div class="col-12">
                                <div class="main-section-title-side">
                                    <h5 class="heading mb-5">Governmental / Local Municipalities / Organisations / Institutions</h5>
                                    <a href="https://www.i-react.eu/"><img src="img/solutions-institutions.png" alt="" class="img-responsive pb-3"></a>
                                    <ul class="solutions-ul">
                                        <li><i class="fa fa-check"></i>In the recent H2020 project, 20 SMEs have developed a professional Disaster Management Platform to predict floods from various intelligent data sources, thus preventing lives, mitigating damages, protect cultural heritage and infrastructure.</li> 
                                        <li><i class="fa fa-check"></i>Platform integrates all the relevant data in one place, crossing over inputs from different sources. All the services are modular and can be deployed independently or as a global system.</li>
                                        <li><i class="fa fa-check"></i>Citizen app helps to get an in-situ data and validate the real situation, thus improving the response coordination and reducing the time-to-action.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <a href="{{ route('contactUs') }}" class="btn-pink">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 mb-3">
                    <div class="solutions-box">
                        <div class="row no-gutters">
                            <div class="col-12">
                                <div class="main-section-title-side">
                                    <h5 class="heading px-4 mb-5">SMEs / Engineers / Academy / Hobbyists</h5>
                                    <img src="img/solutions-sme.png" alt="" class="img-responsive pb-3">
                                    <ul class="solutions-ul">
                                        <li><i class="fa fa-check"></i>The fully-fledged ready-to-use IoT platform where you connect IoT devices in the shortest time possible, enabling you to focus on validating the business value.</li> 
                                        <li><i class="fa fa-check"></i>We continuously listen to our customers and develop the platform, so it meets the core business needs by data analytics, visualisation and integrations with 3rd party tools.</li>
                                        <li><i class="fa fa-check"></i>You can create a batch of devices in the platform with a single code and press of the button, it’s that easy! All the devices have parameters of your choice.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <a href="{{ route('contactUs') }}" class="btn-pink">Contact Us</a>
                            </div>
                        </div>
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