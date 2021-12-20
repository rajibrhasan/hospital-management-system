@extends('layouts.base')

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/sidebar.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/doctor.css') }}">
@endpush

@section('header')
	@include('layouts.sidebar')
@stop

@section('content')

<div class="main">

<div class="row">
	@foreach($res as $key=>$doctor)
    <div class="col-md-6">
      <div class="card" style="border-radius: 15px;">
      	<img class="card-img-top" src="{{asset('images/car1.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $doctor->name }}</h5>
          <h3>{{ $doctor->speciality }}</h3>
          <h3>{{ $doctor->college }}</h3>
          <a href="#" class="btn btn-primary">Book Appointment</a>
        </div>
      </div>
    </div>
    @endforeach
</div>
</div>

@endsection

@push('script')
<script src="{{ asset('js/sidebar.js') }}"></script>
@endpush

@section('footer')

@stop