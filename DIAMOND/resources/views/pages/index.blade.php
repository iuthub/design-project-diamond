@extends('layouts.app')


@section('content')
      <!-- <h1>{{  $title }}</h1> -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('images/1.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('images/2.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('images/3.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('images/4.jpg')}}" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<div class="logo">
<img src="{{asset('images/logo.jpg')}}"
width="550px" height="500px">
</div>
<br> <br><br> <br>
<h1 id="h1">Diamond Restaurant Dining Experience </h1>
<p id="p">Popular for generations, for locals and tourists! <br>
Come in and enjoy our great food & service. <br>
Monday-Saturday from 9am-11pm & Sundays till 9 pm. <br> 

<strong> <em>Please call 518-668-2665 for reservations.</em></strong> </p>


<div class="gridContainer clearfix news">
  <div id="news">   
  <br><br><br><br><br>
<h2 align="center">Featured Menu Items</h2>
<!-- <div class="food">
  <image src="{{asset('images/a.jpg')}}">
  <image src="{{asset('images/b.jpg')}}">
  <image src="{{asset('images/sp.jpg')}}">
  <image src="{{asset('images/p.jpg')}}">
</div> -->
@endsection
