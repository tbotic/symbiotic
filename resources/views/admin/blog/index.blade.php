@extends('admin.index')

@section('content')
<div class="admin-content-padding">
    <div class="main-section">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4 d-flex justify-content-between">
                    <h2>Admin Blog Area</h2>
                    <a href="{{ route('posts.create') }}"><button class="btn btn-dark">New Post</button></a>
                </div>
                @if ($message = Session::get('flash'))
                <div class="col-12">
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                </div>
                @endif
                <div class="col-12">
                    <table class="table table-hover admin-blog-table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col" class="d-none d-md-table-cell">Author</th>
                                <th scope="col" class="d-none d-md-table-cell">Date</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($posts->count())
                                @foreach ($posts as $post)
                                    <tr>
                                        <td class="title-admin-blog-table {{ $post->featured ? 'font-weight-bold' : ''  }}"><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></td>
                                        <td class="d-none d-md-table-cell">{{ $post->user->name }}</td>
                                        <td class="d-none d-md-table-cell">{{ $post->created_at->format('d.m.Y.') }}</td>
                                        <td class="pull-right">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-light mr-1" title="edit"><i class="fa fa-edit"></i></a>
                                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" type="submit" title="delete"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td class="title-admin-blog-table">
                                        There are no posts
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                <div class="col-12 d-flex justify-content-center">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
@include('layouts.footer')
@endsection