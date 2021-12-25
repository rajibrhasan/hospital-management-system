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
	<div class="col-lg-6">
		<div class="card" style="border-radius:15px;">
    <div class="card-header text-center">
      <h2>Upload Test Report</h2>
    </div>
 
    <div class="card-body">
        <form method="POST" enctype="multipart/form-data" id="report" action="{{route('rep.store')}}">
        	@csrf
        	<div class="form-group row">
        		<div class="col-sm-4">
        		<label for="name">Report Name</label>
        	</div>
        	<div class="col-sm-8">
               	<input type="text" name="name" style="width:60%" id="name">
            </div>
        </div>
        <div class="form-group row">
        		<div class="col-sm-4">
        		<label for="patient">Patient ID</label>
        	</div>
        	<div class="col-sm-8">
               	<select class="js-example-basic-single js-states" style="width: 60%;height: 40px;"data-live-search="true" placeholder="Patient ID" id="patient" name="patient">
						@foreach($patients as $patient)
							
							<option value="{{$patient->id}}">{{$patient->id}}</option>
						@endforeach
				</select>
            </div>
        </div>
            <div class="form-group row">
            	<div class="col-sm-4">
            	<label for="name">Report</label>
            </div>
            <div class="col-sm-8">
               	<input type="file" name="image" style="width:60%" placeholder="Choose image" id="image">
            </div>   
            </div> 
            <div class="form-group row justify-content-center">
                <button type="submit" class="btn btn-primary" style="width: 50%" id="submit">Submit</button>
           </div>    
        </form>
 
    </div>
 
  </div>
	</div>
	
</div>




@endsection

@push('script')
<script type="text/javascript">
	$(document).ready(function() {
    	$('.js-example-basic-single').select2({
    			theme: "classic"

    		});

	});
	
</script>

@endpush