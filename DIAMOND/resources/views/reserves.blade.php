@extends('layouts.app')

@section('content')
<div class="container" id="new">
    
        <h1>Reserves</h1>
    @if(count($reserves)>0)
        @foreach($reserves as $reserve)
            <div class="card card-body bg-light">
                <h3><a href="/reserves/{{ $reserve->id }}">{{ $reserve->name }}</a></h3>
                <small>Written on {{ $reserve->created_at }} by {{ $reserve->name }}</small>
            </div>
        @endforeach
        {{-- {{ $reserve->links() }} --}}
    @else
        <p>No posts found</p>
    @endif
</div>
@endsection
