@extends('layouts.base')
@section('header')
@endsection

@section('content')

<div class="container">
	@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
	<div class="row align-items-center justify-content-center" style="min-height: 500px;">
		<div class="col-md-6">
			<div class="card" style="border-radius:15px;">
			  	<h2 class="card-title text-center mb-4">Find Consultant</h2>
			  	<form class="mb-4 align-self-center" method="POST" action="{{route('apt.store') }}">
			  		@csrf
					<div class="form-group ">
					  	<label for="pateint_id">Patient</label>
				      	<input type="text" name="patient_id" id = "patient_id">
				      	<label for="doctor_id">Doctor</label>
				      	<input type="text" name="doctor_id" id = "doctor_id">
				      	<label for="date">Date</label>
  						<input type="date" id="date" name="date" id="date">
  						<label for="time">Time</label>
  						<input type="time" id="time" name="time" id="time">
				      	<input class="btn btn-primary" type="submit">
				    </div>
				</form>
			</div>


		</div>
	</div>
</div>

@endsection
