@extends('admin.adminbase')
@section('adContent')

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

<div class="row align-items-center justify-content-center">
	<div class="col-lg-4">
		<h3 class="text-center">Create New User</h3>
		<form method="POST" method="post" action="{{url('adm/createuser')}}">
		@csrf
			<div class="form-group row">
				<div class="col-sm-4">
					<label for="name">Name</label>
				</div>
				<div class="col-sm-8">
					<input type="text" style="width: 100%" name="name" required>
				</div>
				
			</div>
			<div class="form-group row">
				<div class="col-sm-4">
					<label for="email">Email</label>
				</div>
				<div class="col-sm-8">
					<input type="email" style="width: 100%" name="email" required>
				</div>
			</div>

			<div class="form-group row">
				<div class="col-sm-4">
					<label for="usertype">Usertype</label>
				</div>
				<div class="col-sm-8">
					<select id="usertype" style="width: 100%" name="usertype">
						<option value="admin">Admin</option>
						<option value="doctor">Doctor</option>
					</select>
				</div>
				
				
			</div>

			<div class="form-group row">
				<div class="col-sm-4">
					<label for="phone">Phone</label>
				</div>
				<div class="col-sm-8">
					<input type="text" style="width: 100%" name="phone" required>
				</div>
			</div>
			
			<div class="form-group row">
				<div class="col-sm-4">
					<label for="address">Address</label>
				</div>
				<div class="col-sm-8">
					<input type="text" style="width: 100%" name="address" required>
				</div>

			</div>

			<div class="form-group row">
				<div class="col-sm-4">
					<label for="password">Password</label>
				</div>
				<div class="col-sm-8">
					<input type="password" style="width: 100%" name="password" required>
				</div>
			</div>

			<div class="form-group row">
				<div class="col-sm-4">
					<label for="password2">Confirm Password</label>
				</div>
				<div class="col-sm-8" >
					<input type="password" style="width:100%" name="password2" required>
				</div>
			</div>

				<button class = "btn btn-primary" style="float: right" type="submit">Submit</button>
	
			

		</form>

	</div>
</div>



@endsection