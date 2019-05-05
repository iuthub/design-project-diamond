@extends('layouts.app')


@section('content')

        <div class="team-section">
        	<h1>Our Chefs</h1>
        	<span class="border"></span>
        	<div class="ps">
        		<a href="#p1"><img src="{{asset('images/p1.jfif')}}" alt=""></a>
        		<a href="#p2"><img src="{{asset('images/p2.jfif')}}" alt=""></a>
        		<a href="#p3"><img src="{{asset('images/p3.jpg')}}" alt=""></a>
        		<a href="#p4"><img src="{{asset('images/p4.jpg')}}" alt=""></a>
        		<a href="#p5"><img src="{{asset('images/p5.jpg')}}" alt=""></a>


        	</div>
        	<div class="section" id="p1">
        		<span class="name">Abdusodikov Jamshid</span>
        		<span class="border"></span>
        		<p>Head chef of the restaurant.He is responsible for:<br>
        		*Plan menus and ensure the quality of meals<br>
        		*Check freshness of food and ingredients<br>
        		*Monitor sanitation practices and follow kitchen safety standards
        		 </p>
        	</div>
        	<div class="section" id="p2">
        		<span class="name">Khasanboev Boburbek</span>
        		<span class="border"></span>
        		<p>Sous chef of the restaurant.He is responsible for:<br>
        			*Supervise the restaurant’s cooks<br>
        		*Prepare meals<br>
        		*Report results to the head chefs<br>
        		*In the absence of the head chef, sous chefs run the kitchen.
        		</p>
        	</div>
        	<div class="section" id="p3">
        	<span class="name">Mamatov Eratbek</span>
        	<span class="border"></span>
        	<p>Kitchen Manager of the restaurant.He is responsible for:<br>
        		*Manage kitchen staff and coordinate food orders<br>
        		*Checking food plating and temperature
        	</p>
        </div>
        <div class="section" id="p4">
        	<span class="name">Fayziev Yodgor</span>
        	<span class="border"></span>
        	<p>Restaurant Supervisor of the restaurant.He is responsible for:<br>
        		*Hire and Train Staff<br>
        		*Monitor Customer Experience and Manage Inventory<br>
        		*Ensure Adherence to Food Safety and Sanitation Standards	


        	</p>
        </div>
        	<div class="section" id="p5">
        		<span class="name">Shakarov Ulug'murod</span>
        		<span class="border"></span>
        		<p>Restaurant Manager of the restaurant.He is responsible for:<br>*Coordinating daily restaurant management operations<br>
*Delivering superior food and beverage service and maximizing customer satisfaction<br>
*Responding efficiently and accurately to restaurant customer complaints</p>
        	</div>
        </div>





        </div>
        
@endsection
