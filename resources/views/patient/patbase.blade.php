@extends('layouts.base')
@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/sidebar.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/doctor.css') }}">


@endpush


@section('content')
<!-- Navbar -->
<div class="wrapper d-flex align-items-stretch">
	<nav id="sidebar" class="active">
				<h1><a href="index.html" class="logo">LH</a></h1>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="{{route('pat.index')}}"><span class="fa fa-home"></span>Dashboard</a>
          </li>
          <li>
              <a href="{{url('pat/searchdoc')}}"><span class="fa fa-user"></span>Appointments</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-sticky-note"></span>Prescriptions</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-users"></span>Reports</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-cog"></span>Edit Profile</a>
          </li>
        </ul>

        <div class="footer">
  
        </div>
    	</nav>

	<div id="content" class="p-3 p-md-4">
		<nav class="navbar navbar-expand-lg navbar-light bg-light mb-2">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>
                <li class="nav-item">
                    <h6 style="padding-right:8px;">{{Auth::user()->name}}</h6>
                    <p style="margin-bottom: 0px;">{{Auth::user()->usertype}}</p>
                </li>
                <li class="nav-item">
                    <img src="{{asset('profile_pic/default_user.png')}}" height="36px">
                    
                </li>
              </ul>
            </div>
          </div>
        </nav>

        @yield('patContent')
	
</div>
</div>

	
	

@endsection

@push('script')
<script src="{{ asset('js/sidebar.js') }}"></script>
@endpush
@section('footer')

@stop
