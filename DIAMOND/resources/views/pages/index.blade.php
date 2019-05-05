@extends('layouts.app')


@section('content')
    {{-- <h1>{{$title}}</h1> --}}
    <section class="site-cover" style="background-image: url({{ asset('images/bg_3.jpg') }});" id="section-home">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center site-vh-100">
          <div class="col-md-12">
            <h1 class="site-heading site-animate mb-3">Welcome To Diamond</h1>
            <h2 class="h5 site-subheading mb-5 site-animate">Come and eat well with our delicious &amp; healthy foods.</h2>    
            <p><a href="/services" target="_blank" class="btn btn-outline-white btn-lg site-animate">Reservation</a></p>
          </div>
        </div>
      </div>
    </section>
    <section class="site-section" id="section-about">
      <div class="container">
        <div class="row">
          <div class="col-md-5 site-animate mb-5">
            <h4 class="site-sub-title">Our Story</h4>
            <h2 class="site-primary-title display-4">Welcome</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

            <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            <p><a href="/about" class="btn btn-secondary btn-lg">Learn More About Us</a></p>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-6 site-animate img" data-animate-effect="fadeInRight">
            <img src="images/about_img_1.jpg" alt="Free Template by colorlib.com" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
    <section class="site-section" id="section-gallery">
      <div class="container">
        <div class="row site-custom-gutters">

          <div class="col-md-12 text-center mb-5 site-animate">
            <h2 class="display-4">Gallery</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 site-animate">
            <a href="images/menu_1.jpg" class="site-thumbnail image-popup">
              <img src="images/menu_1.jpg" alt="Free Template by colorlib.com" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4 site-animate">
            <a href="images/menu_2.jpg" class="site-thumbnail image-popup">
              <img src="images/menu_2.jpg" alt="Free Template by colorlib.com" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4 site-animate">
            <a href="images/menu_3.jpg" class="site-thumbnail image-popup">
              <img src="images/menu_3.jpg" alt="Free Template by colorlib.com" class="img-fluid">
            </a>
          </div>

          <div class="col-md-4 site-animate">
            <a href="images/menu_2.jpg" class="site-thumbnail image-popup">
              <img src="images/menu_2.jpg" alt="Free Template by colorlib.com" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4 site-animate">
            <a href="images/menu_3.jpg" class="site-thumbnail image-popup">
              <img src="images/menu_3.jpg" alt="Free Template by colorlib.com" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4 site-animate">
            <a href="images/menu_1.jpg" class="site-thumbnail image-popup">
              <img src="images/menu_1.jpg" alt="Free Template by colorlib.com" class="img-fluid">
            </a>
          </div>

        </div>
      </div>
    </section>
@endsection
