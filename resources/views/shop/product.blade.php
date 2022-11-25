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
                        <h2 class="banner-title">Product</h2>
                        <p class="banner-subtitle">Home <span><i class="fa fa-angle-right"></i></span> Product</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-section">
        <div class="container">
            <div class="row two-service-section">
                <div class="col-12 col-md-6">

                    <div id="custCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
                        
                        <div class="carousel-inner">
                        @foreach ($product->images as $image)
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}"> 
                                <img src="{{ asset($image->path)}}" class="img-responsive" alt=""> 
                            </div>
                        @endforeach
                        </div>

                        <ol class="carousel-indicators list-inline">
                        @foreach ($product->images as $image)
                            <li class="list-inline-item {{ $loop->index ? 'active' : '' }}"> <a id="carousel-selector-0" class="selected" data-slide-to="{{ $loop->index }}" data-target="#custCarousel"> <img src="{{ asset($image->path)}}" class="img-responsive"> </a> </li>
                        @endforeach
                        </ol>

                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="row no-gutters">
                        <div class="col-12">
                            <div class="main-section-title-side">
                                <h2 class="heading">{{ $product->title }}</h2>
                                <h5 class="heading-sm">{{ $product->subtitle }}</h5>
                            </div>
                        </div>
                        <div class="col-12">
                            <p>{{ $product->excerpt }}</p>
                        </div>
                        <form id="formAddToCart" action="{{ route('addToCart', ['id' => $product->id]) }}" method="POST">
                        @csrf
                            <div class="col-12 mb-4">
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        <input name="productQty" class="form-control" type="number" value="1" min="1" oninput="this.value = !!this.value && Math.abs(this.value) >= 1 ? Math.abs(this.value) : null">
                                    </div>
                                    <div class="col-8">
                                        <h5 class="product-price">from €{{ $product->price }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" name="submit" class="btn btn-pink">Add To Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="product-info-nav" class="col-12 my-5">
                    <ul class="nav nav-tabs mb-3" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="additionalInfo-tab" data-toggle="tab" href="#additionalInfo" role="tab" aria-controls="additionalInfo" aria-selected="false">Additional Info</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                            <h4 class="heading-sm">Description</h4>
                            <p>{!! $product->description !!}</p>
                        </div>
                        <div class="tab-pane fade" id="additionalInfo" role="tabpanel" aria-labelledby="additionalInfo-tab">
                            <h4 class="heading-sm">Additional Info</h4>
                            <p>{!! $product->addInfo !!}</p>
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