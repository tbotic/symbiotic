@extends('admin.index')

@section('content')
<div class="admin-content-padding">
    <div class="main-section">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4">
                    <h2>Add New Post</h2>
                </div>
                <div class="col-12">
                    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control @error('title') border border-danger @enderror" id="post-title" name="title" aria-describedby="post title" placeholder="Post Title" value="{{ old('title') }}">
                        </div>
                        <div id="form-group" class="form-row">
                            <div class="col-md-4">
                                <img id="featured-thumb-image" class="col-md-4 img-responsive">
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="button" id="add-featured" class="btn btn-sm btn-secondary">Set Featured Image</button>
                            <input type="file" class="d-none" id="post-image" name="image" onChange="document.getElementById('featured-thumb-image').src=window.URL.createObjectURL(this.files[0])">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control @error('excerpt') border border-danger @enderror" id="post-excerpt" name="excerpt" placeholder="Excerpt" rows="3">{{ old('excerpt') }}</textarea>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control @error('body') border border-danger @enderror" id="post-body" name="body" placeholder="Post Text" rows="20">{{ old('body') }}</textarea>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="post-featured" name="featured">
                                <label class="form-check-label" for="post-featured">Feature on Homepage</label>
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Publish</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<script type="text/javascript">

$(document).ready(function(){
    $('#post-body').summernote();
});

$("#add-featured").click(function(){
    $('#post-image').click();
});

</script>

@endsection

@section('footer')
@include('layouts.footer')
@endsection