@extends('patient.patbase')

@section('patContent')

	<div class="row align-items-center justify-content-center" style="min-height: 400px;">
		<div class="col-lg-6">
			<div class="card" style="border-radius:15px;">
			  	<h2 class="card-title text-center mt-2 mb-4">Find Consultant</h2>
			  	<form class="px-5 mb-4 align-items-center justify-content-center" method="POST" action="{{url ('doclist') }}">
			  		@csrf
					<div class="form-group row">
						<label for="appointment_id" class="col-sm-4 col-form-label">Appointment ID</label>
						<div class="col-sm-8">
							<select class="js-example-basic-single js-states mb-3 " placeholder="Speciality" style="width: 100%;" data-live-search="true" name='sel' id="sel" multiple>
					      	@foreach($speciality as $sp)
					        <option value="{{$sp}}">{{$sp}}</option>
							@endforeach
					      </select>
					    </div>
				</div>
				<button type="submit" class="btn btn-primary mb-2" style="float: right;">Submit</button>
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




