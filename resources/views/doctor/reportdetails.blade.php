@extends('doctor.docbase')
@section('docContent')

<div class="row mt-3 align-items-center justify-content-center">
	<div class="col-lg-6">
		<div class="card" style="border-radius:15px;">
			<h2 class="card-title text-center mt-1">{{$report->name}}</h2>
			<img src="{{asset('reports/'.$report->path)}}" style="">
			
			
		</div>
		</div>
	</div>
</div>

@endsection