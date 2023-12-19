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
                    <form method="POST" action="/blog" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>
                            <div class="col-md-6">
                                <input id="text" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" autofocus>
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
                                <textarea style="height: 200px" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" autofocus></textarea>
                                 @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Upload Photo') }}</label>
                            <div class="col-md-6">
                                <input id="file" type="file" class="form-control @error('image_path') is-invalid @enderror" name="image_path" value="{{ old('image_path') }}" autofocus>
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