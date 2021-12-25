@extends('layouts.base')

@section('header')
@include('navbar')

@endsection('header')

@section('content')
<div clas="container" style="min-height: 800px;">
	<div class="row mt-4 mb-5">
		<div class="col-md-6 px-5 mb-3">
			<div class="card ">
				<img src="{{asset('/images/gallery1.jpg')}}" style="height:300px;width: 100%;">
			</div>
			
		</div>
		<div class="col-md-6 px-5 mb-3">
			<div class="card ">
				<img src="{{asset('/images/gallery2.jpg')}}" style="height:300px;width: 100%;">
			</div>
			
		</div>
		<div class="col-md-6 px-5">
			<div class="card">
				<img src="{{asset('/images/gallery3.jpg')}}" style="height:300px;width: 100%;">
			</div>
			
		</div>
		<div class="col-md-6 px-5">
			<div class="card">
				<img src="{{asset('/images/gallery4.jpg')}}" style="height:300px;width: 100%;">
			</div>
			
		</div>
	</div>

</div>

@endsection('content')

@section('footer')
@include('footer')
@endsection('footer')