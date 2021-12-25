@extends('doctor.docbase')
@section('docContent')

<div class="row align-items-center justify-content-center">
	<div class="col-lg-6">
		<div class="card">
			<h2 class="card-title text-center mt-3">Patient Reports</h2>
			<div class="card-body">
			<table class="table">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">Report ID</th>
			      <th scope="col">Report Name</th>
			
			      <th scope="col">Creation Date</th>
			      <th scope="col">Details</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach($reports as $rep)
			    <tr>
			      <th scope="row">{{$rep->id}}</th>
			      <td>{{$rep->name}}</td>
			  
			      <td>{{$rep->created_at}}</td>
			
			      <td><a href="{{url ('doc/reportshow/'.$rep->id)}}">View Details</a>
			    </tr>
			    @endforeach
			    
			  </tbody>
			</table>
			</div>
		</div>
		</div>
	</div>
</div>

@endsection