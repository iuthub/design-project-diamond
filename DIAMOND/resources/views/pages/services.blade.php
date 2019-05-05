@extends('layouts.app')


@section('content')
        {{-- <h1>{{$title}}</h1> --}}
        @if(count($services) > 0)
			<ul class="list-group">
			    <div>
			      <div class="modal-dialog modal-lg" role="document">
			        <div class="modal-content">
			          <div class="modal-body">
			            <div class="row">
			              <div class="col-lg-12 p-5">
			                
			                <h1 class="mb-4">Reserve A Table</h1>  
			                {!! Form::open(['action' => 'ReservesController@store', 'method' => 'POST']) !!}
			                
			                  <div class="row">
			                    <div class="col-md-6 form-group">
			                      {{ Form::label('name', 'First Name') }}
									{{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name']) }}
			                    </div>
			                    <div class="col-md-6 form-group">
			                      {{ Form::label('surname', 'Last Name') }}
									{{ Form::text('surname', '', ['class' => 'form-control', 'placeholder' => 'Surname']) }}
			                    </div>
			                  </div>
			                  <div class="row">
			                    <div class="col-md-12 form-group">
			                      {{ Form::label('email', 'Email') }}
								{{ Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'Email']) }}
			                    </div>
			                  </div>
			                  <div class="row">
			                    <div class="col-md-6 form-group">
								    {{ Form::label('amount', 'Number of Guests') }}
									{{ Form::number('amount', '', ['class' => 'form-control', 'placeholder' => '1 to 12']) }}
								  </div>			                    
							  	<div class="col-md-6 form-group">
			                      {{ Form::label('phone', 'Phone') }}
								{{ Form::text('phone', '', ['class' => 'form-control', 'placeholder' => 'ex:998998769920']) }}
			                    </div>
			                  </div>

			                  <div class="row">
			                    <div class="col-md-6 form-group">
			                      
			                      {{ Form::label('date', 'Date') }}
									{{ Form::text('date', '', ['class' => 'form-control', 'placeholder' => 'ex:1999-01-10']) }}
			                    </div>
			                  </div>
			                  <div class="row">
			                    <div class="col-md-12 form-group">
			                      {{ Form::label('body', 'Message') }}
								{{ Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Enter Message and Time, table should be reserved']) }}
			                    </div>
			                  </div>
			                  
			                  <div class="row">
			                    <div class="col-md-12 form-group">
			                      
			                    	{{ Form::submit('Submit', ['class' => 'btn btn-primary shadow btn-lg btn-block']) }}
			                    </div>
							
			                  </div>

			                </form>
			                {!! Form::close() !!}
			              </div>
			            </div>
			            
			          </div>
			        </div>
			      </div>
			    </div>
			</ul>
        @endif
@endsection