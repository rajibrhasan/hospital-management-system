@extends('doctor.docbase')

@section('docContent')

<div class="row align-items-center justify-content-center">
	@if ($message = Session::get('success'))
	<div class="col-lg-6">
	    <div class="alert alert-success">
	        <p>{{ $message }}</p>
	    </div>
	</div>   
	@endif
	
</div>

<div class="row align-items-center justify-content-center">
	@if ($errors->any())
	<div class="col-lg-6">
		<div class="alert alert-danger">
    		<strong>Whoops!</strong> There were some problems with your input.<br><br>
	    	<ul>
		        @foreach ($errors->all() as $error)
		           	<li>{{ $error }}</li>
		        @endforeach
	    	</ul>
		</div>
	</div>
	@endif
</div>

<div class="row align-items-center justify-content-center" style="min-height: 500px;">
	<div class="col-lg-6">
		<div class="card" style="border-radius:15px;">
			<h2 class="text-center mt-3 ">Create Prescription</h2>
			<form class="mb-4 px-5 align-items-center" method="POST" action="{{route('pres.store') }}">
			 @csrf
				<div class="form-group row">
					<label for="appointment_id" class="col-sm-3 col-form-label">Appointment ID</label>
					<div class="col-sm-9">
						<select class="js-example-basic-single js-states" style="width: 100%;height: 40px;"data-live-search="true" placeholder="Appointment ID" id="appointment_id" name="appointment_id">
						@foreach($apts as $apt)
							
							<option value="{{$apt->id}}">{{$apt->id}}</option>
						@endforeach
					</select>
					</div>
					
				</div>
				<div class="form-group row">
					<label for="symptoms" class="col-sm-3 col-form-label">Symptoms</label>
					<div class="col-sm-9">
					   <textarea class="form-control" id="symptoms" name="symptoms" placeholder="Symptoms in detail" rows=3></textarea>
					</div>
				</div>
				<div class="form-group row">
					<label for="advice" class="col-sm-3 col-form-label">Advice</label>
					<div class="col-sm-9">
					    <textarea class="form-control" id="advice" name = "advice" placeholder="Recommendation by doctor" rows=3></textarea>
					</div>
				</div>
				<button type="submit" class="btn btn-primary mb-2" style="float:right">Submit</button>
			</form>
		</div>
	</div>
</div>

@endsection

@push('script')
<script type="text/javascript">
	$(document).ready(function() {
    	$('.js-example-basic-single').select2({
    			theme: "classic"

    		});

	});
	
</script>

@endpush