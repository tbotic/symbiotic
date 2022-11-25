@extends('admin.index')

@section('content')

<div class="admin-content-padding">
    <div class="main-section">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4 d-flex justify-content-between">
                    <h2>Admin Shop Area</h2>
                    <a href="{{ route('products.create') }}"><button class="btn btn-dark">New Item</button></a>
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
                                <th scope="col">Item</th>
                                <th scope="col">Price</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($products->count())
                                @foreach ($products as $product)
                                <tr>
                                    <td><a href="{{ route('products.show', $product->id) }}">{{ $product->title }}</a></td>
                                    <td>{{ $product->price }}</td>
                                    <td class="pull-right">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-light mr-1" title="edit"><i class="fa fa-edit"></i></a>
                                            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
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
                                        There are no items yet
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                <div class="col-12 d-flex justify-content-center">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
@include('layouts.footer')
@endsection