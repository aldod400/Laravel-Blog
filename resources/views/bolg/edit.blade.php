@extends('layouts.app')
@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                        <h3><b>Add Post</b></h3>
    
                </div>

                <div class="card-body">
                    <form method="POST" action="/blog/{{ $slug->slug }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label for="text" class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>
                            <div class="col-md-6">
                                <input value = "{{ $slug->title }}" id="text" type="text" class="form-control @error('title') is-invalid @enderror" name="title" autofocus>
                                 @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>
                            <div class="col-md-6">
                                <textarea style="height: 200px" class="form-control @error('description') is-invalid @enderror" name="description" autofocus>{{ $slug->description }}</textarea>
                                 @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="image_path" class="col-md-4 col-form-label text-md-end">{{ __('Upload Photo') }}</label>
                            <div class="col-md-6">
                                <input id="image_path" value = "{{ $slug->image_path }}" type="file" class="form-control @error('image_path') is-invalid @enderror" name="image_path"autofocus>
                                @error('image_path')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit The Post') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection