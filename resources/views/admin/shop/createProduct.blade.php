@extends('admin.index')

@section('content')

<div class="admin-content-padding">
    <div class="main-section">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4">
                    <h2>Add New Item</h2>
                </div>
                <div class="col-12">
                    <form id="createProductForm" action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control @error('title') border border-danger @enderror" id="product-title" name="title" placeholder="Product Name" value="{{ old('title') }}">
                        </div>
                        <div id="form-group" class="form-row">
                            <div class="col-md-4">
                                <img id="featured-thumb-image" class="col-md-4 img-responsive">
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="button" id="add-featured" class="btn btn-sm btn-secondary">Add Featured Image</button>
                            <input type="file" class="d-none" id="featured-image-input" name="featured-image" onChange="document.getElementById('featured-thumb-image').src=window.URL.createObjectURL(this.files[0])">
                        </div>
                        <div id="thumbs" class="form-row">
                            
                        </div>
                        <div class="form-group">
                            <button type="button" id="add" class="btn btn-sm btn-light">Add More Images</button>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control @error('subtitle') border border-danger @enderror" id="product-subtitle" name="subtitle" placeholder="Product Title" value="{{ old('subtitle') }}">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control @error('excerpt') border border-danger @enderror" id="product-excerpt" name="excerpt" placeholder="Excerpt" rows="3">{{ old('excerpt') }}</textarea>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control @error('price') border border-danger @enderror" id="product-price" name="price" placeholder="Product Price" value="{{ old('price') }}">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control @error('description') border border-danger @enderror" id="product-description" name="description" placeholder="Product Description" rows="10">{{ old('description') }}</textarea>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control @error('addInfo') border border-danger @enderror" id="product-addInfo" name="addInfo" placeholder="Product Additional Information" rows="10">{{ old('addInfo') }}</textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Publish</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>

$(document).ready(function(){
    $('#product-description').summernote({
        toolbar: [
            [ 'style', [ 'style' ] ],
            [ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ],
            [ 'fontname', [ 'fontname' ] ],
            [ 'fontsize', [ 'fontsize' ] ],
            [ 'color', [ 'color' ] ],
            [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
            [ 'table', [ 'table' ] ],
            [ 'insert', [ 'link'] ],
            [ 'view', [ 'undo', 'redo', 'fullscreen', 'codeview', 'help' ] ]
        ]
    });

    $('#product-addInfo').summernote({
        toolbar: [
            [ 'style', [ 'style' ] ],
            [ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ],
            [ 'fontname', [ 'fontname' ] ],
            [ 'fontsize', [ 'fontsize' ] ],
            [ 'color', [ 'color' ] ],
            [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
            [ 'table', [ 'table' ] ],
            [ 'insert', [ 'link'] ],
            [ 'view', [ 'undo', 'redo', 'fullscreen', 'codeview', 'help' ] ]
        ]
    });

});

    var i = 0;

    $("#add").click(function(){
        i++;
        $("#thumbs").append('<div id="#product-wrapper'+ i +'" class="form-group col-md-4 thumb-product-wrapper"><img id="thumb-image'+ i +'" class="img-responsive"><a class="btn btn-danger btn-sm remove-img" type="button" onclick="this.parentElement.remove();"><span class="fa fa-times fa-lg"></span></a><input type="file" class="d-none" id="product-image'+ i +'" name="image'+ i +'" onchange=" document.getElementById(&apos;thumb-image'+i+'&apos;).src = window.URL.createObjectURL(this.files[0]) "></div>');
        $('#product-image'+ i +'').click();
    });

    $("#add-featured").click(function(){
        $('#featured-image-input').click();
    });


    </script>
</div>
@endsection

@section('footer')
@include('layouts.footer')
@endsection