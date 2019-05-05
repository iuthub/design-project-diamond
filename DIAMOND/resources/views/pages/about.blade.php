@extends('layouts.app')


@section('content')
        {{-- <h1>{{$title}}</h1>
        <p>This is the About page</p> --}}

        <div class="team-sectiona">
        	<h1>Our Chefs</h1>
        	<span class="bordera"></span>
        	<div class="ps">
        		<a href="#p1"><img src="{{asset('images/p1.jpg')}}" alt=""></a>
        		<a href="#p2"><img src="{{asset('images/p2.jpg')}}" alt=""></a>
        		<a href="#p3"><img src="{{asset('images/p3.jpg')}}" alt=""></a>
        		<a href="#p4"><img src="{{asset('images/p4.jpg')}}" alt=""></a>
        		<a href="#p5"><img src="{{asset('images/p5.jpg')}}" alt=""></a>


        	</div>
        	<div class="sectiona" id="p1">
        		<span class="namea">Abdusodikov Jamshid</span>
        		<span class="bordera"></span>
        		<p>Head chef of the restaurant.He is responsible for:<br>
        		*Plan menus and ensure the quality of meals<br>
        		*Check freshness of food and ingredients<br>
        		*Monitor sanitation practices and follow kitchen safety standards
        		 </p>
        	</div>
        	<div class="sectiona" id="p2">
        		<span class="namea">Khasanboev Boburbek</span>
        		<span class="bordera"></span>
        		<p>Sous chef of the restaurant.He is responsible for:<br>
        			*Supervise the restaurant’s cooks<br>
        		*Prepare meals<br>
        		*Report results to the head chefs<br>
        		*In the absence of the head chef, sous chefs run the kitchen.
        		</p>
        	</div>
        	<div class="sectiona" id="p3">
        	<span class="namea">Mamatov Eratbek</span>
        	<span class="bordera"></span>
        	<p>Kitchen Manager of the restaurant.He is responsible for:<br>
        		*Manage kitchen staff and coordinate food orders<br>
        		*Checking food plating and temperature
        	</p>
        </div>
        <div class="sectiona" id="p4">
        	<span class="namea">Fayziev Yodgor</span>
        	<span class="bordera"></span>
        	<p>Restaurant Supervisor of the restaurant.He is responsible for:<br>
        		*Hire and Train Staff<br>
        		*Monitor Customer Experience and Manage Inventory<br>
        		*Ensure Adherence to Food Safety and Sanitation Standards	


        	</p>
        </div>
        	<div class="sectiona" id="p5">
        		<span class="namea">Shakarov Ulug'murod</span>
        		<span class="bordera"></span>
        		<p>Restaurant Manager of the restaurant.He is responsible for:<br>*Coordinating daily restaurant management operations<br>
*Delivering superior food and beverage service and maximizing customer satisfaction<br>
*Responding efficiently and accurately to restaurant customer complaints</p>
        	</div>
        </div>

<section class="home-about-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-9">
							
							<h1>
								We’ve cooked every item
								from the core of our heart to serve you
							</h1>
							<p>
								<span>We are here to listen from you deliver exellence by any means</span>
							</p>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore magna aliqua. Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.
							</p>					
						</div>
					</div>
				</div>	
			</section>



        </div>
@endsection
