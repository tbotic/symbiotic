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
                        <h2 class="banner-title">Post</h2>
                        <p class="banner-subtitle">Home <span><i class="fa fa-angle-right"></i></span> Blog <span><i class="fa fa-angle-right"></i></span> Post</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bl-post">
                            <div class="bl-post-content">
                                <div class="bl-post-content-info row align-items-center">
                                    <small><span><i class="fa fa-clock-o"></i></span> {{ $post->created_at->format('d.m.Y.') }}</small>
                                    <small><span><i class="fa fa-user"></i></span> {{ $post->user->name }}</small>
                                </div>
                                <div class="bl-post-content-title mb-3">
                                    <h4>{{ $post->title }}</h4>
                                </div>
                                <img class="img-responsive mb-3" src="/images/{{ $post->image }}" alt=""/>
                                <div class="blog-post-content-excerpt">
                                    {!! ($post->body) !!}
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