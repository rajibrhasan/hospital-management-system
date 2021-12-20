@extends('patient.patbase')

@section('patContent')

<div class="row">
	@foreach($res as $key=>$doctor)
    <div class="col-md-3">
      <div class="card" style="border-radius: 15px;">
      	<img class="card-img-top" src="{{asset('profile_pic/default_user.png')}}" height="200px" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $doctor->name }}</h5>
          <h3>{{ $doctor->speciality }}</h3>
          <h3>{{ $doctor->college }}</h3>
          <a href="#" class="btn btn-primary">Book Appointment</a>
        </div>
      </div>
    </div>
    @endforeach
</div>
</div>

@endsection
