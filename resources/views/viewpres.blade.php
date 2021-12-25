<div class="row align-items-center justify-content-center">
	<div class="col-lg-6">
		<div class="card">
			<h2 class="card-title text-center mt-1">My Prescription</h2>
			<div class="card-body">
			<table class="table">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">Prescription ID</th>
			      <th scope="col">Doctor Name</th>
			      <th scope="col">Speciality</th>
			      <th scope="col">Creation Date</th>
			      <th scope="col">Details</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach($prescriptions as $p)
			    <tr>
			      <th scope="row">{{$p->id}}</th>
			      <td>{{$p->docname}}</td>
			  
			      <td>{{$p->speciality}}</td>
			      <td>{{$p->created_at}}</td>
			      <td><a href="{{url ('pres/show/'.$p->id)}}">View Details</a>
			    </tr>
			    @endforeach
			    
			  </tbody>
			</table>
			</div>
		</div>
		</div>
	</div>
</div>