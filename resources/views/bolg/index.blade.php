@extends('layouts.app')
@section('content')

    @if(session()->has("message"))
        <div class="alert alert-success" role="alert">
            {{session()->get('message') }}
        </div>
    @endif
    <div class="container">
        <h1 align = "center"><b>All Posts</b></h1>
    </div>
    @if (Auth::check())
        <div class="container">
            <a href="/blog/create" class="btn btn-primary"> Add Blog</a><hr>
        </div>
    @endif
    
    @foreach ($posts as $post)
        <div class="container" style="padding: 10px">
        <div class="col-10 mobile-img d-flex">
                <div class="row text-center">
                    <img src="/images/{{ $post->image_path }}" class="img-fluid" alt="mobile screen">
                </div>
        <div class="col-6 my-auto">
            <h2>
                <b>{{ $post->title }}</b>
            </h2>
            <span style="padding:10px">
                <b><i>By:</i></b> <span><b><i>{{ $post->user->name }}</i></b></span>
                <br><b><i>On:</i></b> <span><b><i>{{ date('D-M-Y', strtotime($post->updated_at)) }}</i></b></span>

                 <p style="line-height: 20px;padding:10px">
                     {{ $post->description }}
            </p>
                &nbsp &nbsp<a href="/blog/{{ $post->slug }}" class="btn btn-primary"> Read More</a>

            </span>
        </div>
    </div>
<hr>
    @endforeach
@endsection