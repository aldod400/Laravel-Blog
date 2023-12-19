@extends('layouts.app')
@section('content')
    @if(session()->has('message'))
         <div class="alert alert-success" role="alert">
            {{session()->get('message') }}
        </div>
    @endif  
   
            <div class="container">
                <h1 align = "center"><b>{{ $slug->title }}</b></h1>
            </div>
            <div class="container" style="padding: 10px">
                    <div class="text-center">
                        <img style = "width:500px;height:500px" src="/images/{{ $slug->image_path }}" class="img-fluslug" alt="mobile screen">
                    </div>
                <span style="padding:10px">
                    <b><i>By:</i></b> <span><b><i>{{ $slug->user->name }}</i></b></span>
                    <br><b><i>On:</i></b> <span><b><i>{{ date('D-M-Y', strtotime($slug->updated_at)) }}</i></b></span>

                    <p style="line-height: 20px;padding:10px">
                        {{ $slug->description }}
                </p>
                </span>
            </div>
        </div>
        @if(Auth::user() && Auth::user()->id == $slug->user_id)
                        &nbsp &nbsp<a href="/blog/{{ $slug->slug }}/edit" class="btn btn-success" style="margin-left: 130px;padding-left:5%; padding-right:5%;inline:block"><b>Edit</b></a>
                <form action="/blog/{{ $slug->slug }}" method="POST" style=" display:inline;">
                    @method('delete')
                    @csrf
                    &nbsp &nbsp<button type="submit" class="btn btn-danger" style="margin-left: 130px;padding-left:5%; padding-right:5%;inline:block"><b>Delete</b></button>
                </form>
                <hr style="padding: 1%" >


        @endif
        
@endsection