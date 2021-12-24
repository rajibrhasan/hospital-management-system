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
<form method="POST" method="post" action="{{url('adm/createuser')}}">
	@csrf
	
		<div class="col-6">
			<label for="name">Name</label>
			
		</div>
		<div class="col-6">
			<input type="text" name="name" required>
		</div>
		<div class="col-6">
			<label for="email">Email</label>
		</div>
		<div class="col-6">
			<input type="email" name="email" required>
		</div>

		<div class="col-6">
			<label for="usertype">Usertype</label>
		</div>
		<div class="col-6">
			<select>
				<option value="admin">Admin</option>
				<option value="doctor">Doctor</option>
			</select>
		</div>

		<div class="col-6">
			<label for="phone">Phone</label>
		</div>
		<div class="col-6">
			<input type="text" name="phone" required>
		</div>
		<div class="col-6">
			<label for="address">Address</label>
		</div>
		<div class="col-6">
			<input type="text" name="address" required>
		</div>

		<div class="col-6">
			<label for="password">Password</label>
		</div>
		<div class="col-6">
			<input type="password" name="password" required>
		</div>
		<div class="col-6">
			<label for="password2">Confirm Password</label>
		</div>
		<div class="col-6">
			<input type="password" name="password2" required>
		</div>

		<div class="col-6 mt-3">
			<button class = "btn btn-primary" type="submit">Submit</button>
		</div>
	
	

</form>
</div>

@endsection