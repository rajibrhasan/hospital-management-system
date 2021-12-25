@extends('patient.patbase')
@section('patContent')

<div class="row mt-3 align-items-center justify-content-center">
	<div class="col-lg-6">
		<div class="card" style="border-radius:15px;">
			<h2 class="card-title text-center mt-3">Prescription</h2>
			<div class="card-body">
				<div class="row">
				<h5>Medical History</h5>
				<p>{{$pres->symptoms}}</p>
			</div>
			<div class="row">
				<h5>Treatment</h5>
				<p>{{$pres->treatment}}</p>
			</div>
			</div>
			
			</div>
		</div>
		</div>
	</div>
</div>

@endsection