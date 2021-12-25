@extends('layouts.base')

@section('header')
@include('navbar')

@endsection('header')

@section('content')
<div class="container">
	<div class="row " style="min-height:500px;">
		<h3 class="mt-4">Available Doctors</h3>
	  <hr>
		@foreach($res as $key=>$doctor)

	    <div class="col-md-4 mb-4">
	    	<div class="card" style="border-radius:15px;">
	    		<div class="card-body">
	    			<div class="row mb-2">
				        <div class="col-5">
				        	<img style="height:120px;" src="{{asset('profile_pic/default_user.png')}}">
				    	</div>
				        <div class="col-7" style="min-height:130px;">
				            <h4 class="m-0">{{ $doctor->name }}</h4>
				            <h5 class="m-0">{{ $doctor->speciality }}</h5>
				            <p class="m-0">{{ $doctor->college }}</p>
				            <p class="m-0">{{$doctor->position}}</p>
				            
				         </div>
				     </div>
				     <div class="row mb-2" role="">
				     	<p class="m-0">Weekdays: Sun,Mon,Tue,Wed,Thu</p>
				     	<p class="m-0">Visiting Hour: 6pm-10pm</p>
				     </div>
					<button type="submit" onclick="event.preventDefault();alert('Please login to book appointment')"class="btn btn-primary">Book Appointment</button>
	    		</div>
	    	</div>
	     
	  </div>
	  @endforeach
	</div>
</div>


@endsection('content')


@section('footer')
@include('footer')
@endsection('footer')
