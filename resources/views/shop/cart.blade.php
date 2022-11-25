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
                        <h2 class="banner-title">Cart</h2>
                        <p class="banner-subtitle">Home <span><i class="fa fa-angle-right"></i></span> Cart</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-section">
        <div class="container">
            @if(Session::has('cart'))
                <div class="d-none d-md-flex row cart-head">
                    <div class="col-1">
                    </div>
                    <div class="col-6 cart-title">
                        Product
                    </div>
                    <div class="col-2">
                        Quantity
                    </div>
                    <div class="col-2">
                        Price
                    </div>
                    <div class="col-1">
                    </div>
                </div>
                @foreach($products as $product)
                    <div class="row cart-body">
                        <div class="col-1 d-none d-md-flex">
                            <img src="{{ $product['item']->featuredImage()->path }}" alt="" class="img-query-table">
                        </div>
                        <div class="col-12 col-md-6 cart-title">
                            {{ $product['item']['title'] }}
                        </div>
                        <div class="col-5 col-md-2">
                            <span><a href="{{ route('reduceByOne', ['id' => $product['item']['id']]) }}" class="mr-3" type="button" title="reduce"><i class="fa fa-minus"></i></a></span>
                                {{ $product['qty'] }}
                            <span><a href="{{ route('addByOne', ['id' => $product['item']['id']]) }}" class="ml-3" type="button" title="add"><i class="fa fa-plus"></i></a></span>
                        </div>
                        <div class="col-5 col-md-2">
                            from €{{ $product['price'] }}
                        </div>
                        <div class="col-2 col-md-1">
                        <a href="{{ route('removeItem', ['id' => $product['item']['id']]) }}" class="btn btn-outline-danger" type="button" title="delete"><i class="fa fa-trash"></i></a>
                        </div>
                    </div>
                @endforeach
                <div class="row cart-footer">
                    <div class="d-none d-md-flex col-1">
                    </div>
                    <div class="d-none d-md-flex col-md-6 cart-title">
                        Total
                    </div>
                    <div class="col-5 col-md-2">
                        {{ $totalQty }}
                    </div>
                    <div class="col-5 col-md-2">
                        from €{{ $totalPrice }}
                    </div>
                    <div class="col-2 col-md-1">
                    </div>
                </div>
            @else
            <div class="row">
                <div class="col-12">
                    <h5 class="text-center my-5">There are no items in cart yet.</h5>
                </div>
            </div>
            @endif
            <div class="row mt-5">
                <div class="col-12 d-flex justify-content-between">
                    <a href="{{ route('products.index') }}" class="btn btn-white">Add More Items</a>
                    <a href="{{ route('checkout') }}" class="btn btn-pink">Proceed</a>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection

@section('footer')
@include('layouts.footer')
@endsection