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
                        <h2 class="banner-title">Inquiry Sent</h2>
                        <p class="banner-subtitle">Home <span><i class="fa fa-angle-right"></i></span> Inquiry Sent</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-section">
        <div class="container">
            <div class="row h-100">
                <div class="col-12 col-md-6 my-auto">
                    <div class="main-section-title-side">
                        <h2 class="heading">Your Inquiry is sent!</h2>
                        <h5 class="heading-sm">Thank You for showing interest in our products. We will contact you in short notice.</h5>
                        <a href="{{ route('home') }}" class="btn btn-pink mt-5">Back to Homepage</a>
                    </div>
                </div>
                <div class="d-none d-md-block col-md-6 my-auto">
                    <img class="img-responsive" src="https://symbiotic.hr/img/thanks-mail.jpg" alt="thanks-mail">
                </div>
            </div>
        </div>
    </div>

</main>
@endsection

@section('footer')
@include('layouts.footer')
@endsection