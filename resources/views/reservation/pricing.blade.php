@extends('layouts.basic')

@section('content')

<div class="row" style="margin-top:100px">
	<div class="col-md-2"></div>
	<div class="col-md-10">
			<form action="/addtrip" method="post">
				@csrf
			   <div class="row">
				   <div class="col-md-12">
					   @if(Session::has('success'))
						<div class="alert alert-success">{{session::get('success')}}</div>
					   @elseif(Session::has('warning'))
						<div class="alert alert-danger">{{session::get('warning')}}</div>
					   @endif 
					</div>
					
					<div class="col-md-4">
						<div class="form-group">
							{{-- first name --}}
							<label for="">First Name</label>
							<div>
							
								<input type="text" name="fname" class="form-control">
								{!! $errors->first('sfname','<p class="alert alert-danger">:message</p>')!!}
							</div>

						</div>

					</div>
					{{-- end fname --}}
					

						{{-- last name --}}
						<div class="col-md-4">
								<div class="form-group">
									<label for="">Last Name</label>
									<div>
										<input type="text" class="form-control" name="lname">
										{!! $errors->first('lname','<p class="alert alert-danger">:message</p>')!!}
									</div>
	
								</div>
	
							</div>
						{{-- last name --}}

						{{-- number of seats --}}
						<div class="col-md-8">
								<div class="form-group">
									<label for="">number of seats</label>
									<div>
										
										
										<input type="text" name="seats" class="form-control">
										{!! $errors->first('seats','<p class="alert alert-danger">:message</p>')!!}
									</div>
								</div>
						</div>
						{{-- end  number of seats --}}
						
						{{-- nic number --}}
						<div class="col-md-8">
								<div class="form-group">
									<label for="">National Id Card Number</label>
									<div>
										<input type="text" name="nic" class="form-control">	
										{!! $errors->first('nic','<p class="alert alert-danger">:message</p>')!!}
									</div>
	
								</div>
	
								
							</div>
						{{-- end nic number --}}
						{{-- Telephone number --}}
						<div class="col-md-8">
								<div class="form-group">
									<label for="">Telephone number</label>
									<div>
										  <input type="text" class="form-control" name="tp">
										{!! $errors->first('tp','<p class="alert alert-danger">:message</p>')!!}
									</div>
	
								</div>
	
								<div>
	
								</div>
							</div>
						{{-- end telephone number --}}

						{{-- email --}}
						<div class="col-md-8">
								<div class="form-group">
									<label for="">email</label>
									<div>
										  <input type="text" class="form-control" name="email">
										{!! $errors->first('email','<p class="alert alert-danger">:message</p>')!!}
									</div>
	
								</div>
	
								
							</div>
						{{-- endemail --}}

						{{-- email --}}
						<div class="col-md-8">
								<div class="form-group">
									<label for="">email</label>
									<div>
										  <input type="text" class="form-control" name="email">
										{!! $errors->first('email','<p class="alert alert-danger">:message</p>')!!}
									</div>
	
								</div>
	
								
							</div>
						{{-- endemail --}}
						{{-- hidden input fields --}}
						<input type="hidden" value="{{$date->location}}" name="location">
						<input type="hidden" value="{{$data->start_date}}" name="start_date">
						<input type="hidden" value="{{$data->boatid}}" name="boat_id">
						

						{{-- end hidden input fields --}}
						<div class="col-md-6 ">
							<input type="submit" class="btn btn-primary btn-md" value="ADD TRIP TO THE CALENDER">
						</div>
			   </div>
			</form>			
	</div>
	<div class="col-md-2"></div>

</div>



@endsection