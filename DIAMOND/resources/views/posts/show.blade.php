 @extends('layouts.app')

 @section('content')
 	<a href="/posts" class="btn btn-default shadow">Go Back</a>
	<h1>{{ $post->title }}</h1>
	<img src="/storage/cover_image/{{ $post->cover_image }}" alt="image" style="width: 20px;">
	<br>
	<br>
	<div>
		{{ $post->body }}
	</div>
	<hr>
	<small>Written on {{ $post->created_at }}  by {{ $post->user->name }}</small>
	<hr>

	@if(!Auth::guest())
		@if(Auth::user()->id == $post->user_id)
			<a href="/posts/{{ $post->id }}/edit" class="btn btn-default shadow" style="background-color: #B2B2B2FF;">Edit</a>

			 {!! Form::open(['action' => ['PostsController@destroy', $post->id], '_method' => 'POST', 'class' => 'float-right']) !!}
			 	{{ Form::hidden('_method', 'DELETE') }}
			 	{{ Form::submit('DELETE', ['class' => 'btn btn-danger shadow']) }}
			 {!! Form::close() !!}
		 @endif
	@endif
 @endsection	