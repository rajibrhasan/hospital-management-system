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
			  	<h2 class="card-title text-center mb-4">Add Prescription</h2>
			  	<form class="mb-4 align-self-center" method="POST" action="{{route('pres.store') }}">
			  		@csrf
					<div class="form-group ">
					  	<label for="appointment_id">Appointment</label>
				      	<input type="text" name="appointment_id" id = "appointment_id">
				      	<label for="doctor_id">Symptoms</label>
				      	<input type="text" name="symptoms" id = "symptoms">
				      	<label for="advice">Advice</label>
  						<input type="text" name="advice" id="advice" >

  						<input class="btn btn-primary" type="submit">
  						
				    </div>
				</form>
			</div>


		</div>
	</div>
</div>

@endsection
