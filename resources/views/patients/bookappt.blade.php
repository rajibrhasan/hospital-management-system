@extends('layouts.base')
@section('header')
@endsection

@section('content')

<div class="container">
	<div class="row align-items-center justify-content-center" style="min-height: 500px;">
		<div class="col-md-6">
			<div class="card" style="border-radius:15px;">
			  	<h2 class="card-title text-center mb-4">Find Consultant</h2>
			  	<form class="mb-4 align-self-center" method="post" action="{{url ('doclist') }}">
			  		@csrf
					<div class="form-group ">
				      <select class="form-select mb-3" place-holder="Cardiologist,Medicine,Kidney" style="width: 300px;" name='sel' id="sel">
				      	@foreach($speciality as $sp)
				        <option value="{{$sp}}">{{$sp}}</option>
						@endforeach
				      </select>
				      <input class="btn btn-primary" type="submit">
				    </div>
				</form>
			</div>


		</div>
	</div>
</div>

@endsection




