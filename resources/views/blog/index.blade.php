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
                        <h2 class="banner-title">Blog</h2>
                        <p class="banner-subtitle">Home <span><i class="fa fa-angle-right"></i></span> Blog</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                @if ($posts->count())
                    @foreach ($posts as $post)
                    <div class="bl-post">
                        <a href="{{ route('posts.show', $post->id) }}">
                            <img class="img-responsive" src="/images/{{ $post->image }}" alt=""/>
                            <div class="bl-post-content">
                                <div class="bl-post-content-info row align-items-center">
                                    <small><span><i class="fa fa-clock-o"></i></span> {{ $post->created_at->format('d.m.Y.') }}</small>
                                    <small><span><i class="fa fa-user"></i></span> {{ $post->user->name }}</small>
                                </div>
                                <div class="bl-post-content-title">
                                    <h5>{{ $post->title }}</h5>
                                </div>
                                <div class="blog-post-content-excerpt">
                                    <p>{{ $post->excerpt }}</p>
                                </div>
                                <a href="{{ route('posts.show', $post->id) }}" class="btn-pink">Read More</a>
                            </div>
                        </a>
                    </div>
                    @endforeach
                    {{ $posts->links() }}
                @else
                    <p class="text-center">There are no posts at this moment.</p>
                @endif
                </div>
                <div class="col-12 col-md-4">
                    <div class="blog-side">
                        <h5 class="blog-side-title">Latest Posts</h5>
                        @if ($posts->count())
                            @foreach ($posts as $post)
                            <a href="{{ route('posts.show', $post->id) }}">
                                <div class="blog-side-articles">
                                    <p>{{ $post->title }}</p>
                                </div>
                            </a>
                            @endforeach
                        @else
                            <div class="blog-side-articles">
                                <p>There are no posts yet.</p>
                            </div>
                            <hr>
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