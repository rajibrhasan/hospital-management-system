@extends('layouts.base')
@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/sidebar.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/doctor.css') }}">

@endpush
@section('header')
	@include('layouts.sidebar')
@stop

@section('content')
  <div class="row">
    <div class="col-md-6">
      <div class="card" style="border-radius: 15px;">
        <div class="card-body">
          <h5 class="card-title">Upcoming Appointments</h5>
          <table class="table">
			  <thead>
			    <tr>
			      <th scope="col">Appointment ID</th>
			      <th scope="col">Patient Name</th>
			      <th scope="col">Date</th>
			      <th scope="col">Time</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row">1</th>
			      <td>Mark</td>
			      <td>Otto</td>
			      <td>@mdo</td>
			    </tr>
			    <tr>
			      <th scope="row">2</th>
			      <td>Jacob</td>
			      <td>Thornton</td>
			      <td>@fat</td>
			    </tr>
			    <tr>
			      <th scope="row">3</th>
			      <td>Larry</td>
			      <td>the Bird</td>
			      <td>@twitter</td>
			    </tr>
			  </tbody>
			</table>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card" style="border-radius: 15px;">
        <div class="card-body">
          <h5 class="card-title">My Appointments</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>

  


@endsection

@push('script')
<script src="{{ asset('js/sidebar.js') }}"></script>
@endpush
@section('footer')

@stop
