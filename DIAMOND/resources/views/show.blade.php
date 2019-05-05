 @extends('layouts.app')

 @section('content')
 	<a href="/reserves" class="btn btn-default shadow">Go Back</a>
	<h1>{{ $reserve->name }}</h1>
	<div>
		<h2>{{ $reserve->surname }}</h2>
	</div>
	<div>
		<h3>RESERVE FOR:   {{ $reserve->date }}</h3>
	</div>
	<div>
		<h5>Email:  {{ $reserve->email }}</h5>
	</div>
	<div>
		<p>NUMBER OF PEOPLE: {{ $reserve->amount }}</p>
	</div>
	<hr>
	<small>Written on {{ $reserve->created_at }}  by {{ $reserve->name }}</small>
	<hr>
		
	<div>
		{{ $reserve->body }}
	</div>
 @endsection	