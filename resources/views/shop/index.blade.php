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
                        <h2 class="banner-title">Shop</h2>
                        <p class="banner-subtitle">Home <span><i class="fa fa-angle-right"></i></span> Shop</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="main-section-title">
                        <p class="subheading">OUR SHOP</p>
                        <h2 class="heading">Welcome to our product <span>Catalog</span></h2>
                        <p class="mt-4">Add products that interests you to the cart and send us an inquiry.<br><b>We'll contact you in short notice with an offer.</b></p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                    @if ($products->count())
                        @foreach ($products as $product)
                        <div class="col-12 col-sm-6 col-md-4">
                            <a href="{{ route('products.show', $product->id) }}">
                                <div class="mission-box">
                                    <div class="shop-img-wrapper" style="background-image:url({{ asset($product->featuredImage()->path) }})"></div>
                                    <div class="mission-box-caption">
                                        <h6>{{ $product->title }}</h6>
                                        <p>from €{{ $product->price }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                        {{ $products->links() }}
                    @else
                        <div class="col-12">
                            <p class="text-center">There are no listed products at this moment.</p>
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