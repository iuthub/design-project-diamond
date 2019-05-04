@extends('layouts.app')


@section('content')
        {{-- <h1>{{$title}}</h1> --}}
        @if(count($services) > 0)
			<ul class="list-group">
				{{-- @foreach ($services as $service)
					<li class="list-group-item">{{ $service }}</li>
				@endforeach --}}
				<!-- Modal -->
			    <div {{-- class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="reservationModalLabel" aria-hidden="true" --}}>
			      <div class="modal-dialog modal-lg" role="document">
			        <div class="modal-content">
			          <div class="modal-body">
			            <div class="row">
			              <div class="col-lg-12">
			                <div class="bg-image" style="background-image: url({{ asset('images/reservation_1.jpg') }});"></div>
			              </div>
			              <div class="col-lg-12 p-5">
			                {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			                  <small>CLOSE </small><span aria-hidden="true">&times;</span>
			                </button> --}}
			                <h1 class="mb-4">Reserve A Table</h1>  
			                <form action="#" method="post">
			                  <div class="row">
			                    <div class="col-md-6 form-group">
			                      <label for="m_fname">First Name</label>
			                      <input type="text" class="form-control" id="m_fname">
			                    </div>
			                    <div class="col-md-6 form-group">
			                      <label for="m_lname">Last Name</label>
			                      <input type="text" class="form-control" id="m_lname">
			                    </div>
			                  </div>
			                  <div class="row">
			                    <div class="col-md-12 form-group">
			                      <label for="m_email">Email</label>
			                      <input type="email" class="form-control" id="m_email">
			                    </div>
			                  </div>
			                  <div class="row">
			                    <div class="col-md-6 form-group">
								    <label for="guests">Number of guests:</label>
								    <input type="number" class="form-control" id="guests" placeholder="Number" required>
								  </div>			                    
							  	<div class="col-md-6 form-group">
			                      <label for="m_phone">Phone</label>
			                      <input type="tel" class="form-control" id="m_phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="123-4567-8901" required>
			                    </div>
			                  </div>

			                  <div class="row">
			                    <div class="col-md-6 form-group">
			                      <label for="m_date">Date</label>
			                      <input type="text" class="form-control" id="m_date">
			                    </div>
			                    <div class="col-md-6 form-group">
			                      <label for="m_time">Time</label>
			                      <input type="text" class="form-control" id="m_time">
			                    </div>
			                  </div>

			                  <div class="row">
			                    <div class="col-md-12 form-group">
			                      <label for="m_message">Message</label>
			                      <textarea class="form-control" id="m_message" cols="30" rows="7"></textarea>
			                    </div>
			                  </div>
			                  
			                  <div class="row">
			                    <div class="col-md-12 form-group">
			                      <input type="submit" class="btn btn-primary btn-lg btn-block" value="Reserve Now">
			                    </div>
			                  </div>

			                </form>
			              </div>
			            </div>
			            
			          </div>
			        </div>
			      </div>
			    </div>
			</ul>
        @endif
@endsection