@extends('layouts.app')

@section('content')

    <div class="hero-bg-image">
        <h1 style="color:rgb(206, 206, 206);" class = "position-absolute top-50 start-50 translate-middle">Wlecome to My Blog</h1>
        <div style="margin: 0 auto;padding: 320px;width: 50%;height:700px">
            <a href="blog" class="btn btn-primary " style="">Start Reading</a>
        </div>
    </div>
<br><br>
    <div class="container d-flex">
        <div>
            <img src="https://picsum.photos/id/239/800/500" alt="" style="border-radius: 15px;">
        </div>

        <div><br><br>
            <h2 style="font-size: 24px;font:bolder"> &nbsp How to be Expert in 2023</h2>

            <p style="text-aline:center">
                &nbsp &nbsp You can find a list od all programming languages here.
            </p>

            <p style="color: gray">
                &nbsp Get same random image every time based on a seed,by adding &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; to the start of url. you may combine any of the options above. For &nbsp; &nbsp; &nbsp; example to get the spacific image that grayscale.
            </p>
            &nbsp &nbsp<a href="/" class="btn btn-primary" style="width: 50%;"> Read More</a>
        </div>
    </div>

    <div class="text-center shadow-smx" style="margin:20px; border:1px solid rgb(44, 93, 255); background-color:rgb(44, 93, 255);color:aliceblue;border-radius: 15px">
        <h2 style="padding-top:25px;">Blog Catigories</h2>
        <div class="container mx-auto col-4" style="padding-top:10px;">
            <span style=" padding-left:25px;font:bolder"><b>Ux Design</b></span>
            <span style=" padding-left:25px;font:bolder"><b>Programming</b></span>
            <span style=" padding-left:25px;font:bolder"><b>Graphic Design</b></span>
            <span style=" padding-left:25px;font:bolder"><b>Front-End</b></span>
        </div>
    </div>
    <div class="container mx-auto" style="text:center; padding-top:15px;padding-buttom:15px">
        <h2 style="padding-top: 20px;padding-buttom:20px" align = "center"><b>Recent Post</b></h2>
        <p style="color: gray;font-size:20px;padding:10px">
            PHP is a general-purpose scripting language geared towards web development.It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1993 and released in 1995. The PHP reference implementation is now produced by the PHP Group. PHP was originally an abbreviation of Personal Home Page, but it now stands for the recursive initialism PHP: Hypertext Preprocessor
        </p>
</div>
  <div class="container"  style="margin-bottom: 50px">
    <div class="row">
      <div class="col-6">
        <div class="text-primary font-tertiary d-flex" style="background:rgb(78, 184, 233); color:rgb(0, 0, 0) !important;padding:15px">
            <div style="display: block;padding-top:10px ;padding-buttom:15px">
                <ul class="d-flex" style="list-style-type:none;">
                    <li class = "myhover"><a href="/" style="padding:20px;color:aliceblue;text-decoration:none"><b>PHP</b></a></li>
                    <li class = "myhover"><a href="/" style="padding:0px;color:aliceblue;text-decoration:none"><b>Programming</b></a></li>
                    <li class = "myhover"><a href="/" style="padding:20px;color:aliceblue;text-decoration:none"><b>Languages</b></a></li>
                    <li class = "myhover"><a href="/" style="padding:20px;color:aliceblue;text-decoration:none"><b>Back-End</b></a></li>

                </ul>
                <h4 style="line-height:30px;text-align:left">
                    PHP is a general-purpose scripting language geared towards web development.It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1993 and released in 1995. The PHP reference implementation is now produced by the PHP Group.
                PHP was originally an abbreviation of Personal Home Page, but it now stands for the recursive initialism PHP: Hypertext Preprocessor
                PHP code is usually processed on a web server by a PHP interpreter implemented as a module, a daemon or a Common Gateway Interface (CGI) executable
                </h4>
                <a href="/" class="btn btn-primary" style="width: 50%;"><b>Read More</b></a>

            </div>
        </div>
      </div>
      <div class="col-6 mobile-img d-flex">
        <img src="https://picsum.photos/id/430/800/500" class="img-fluid" alt="mobile screen">
      </div>

    </div>
  </div>
@endsection
