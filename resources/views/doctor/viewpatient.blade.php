@extends('doctor.docbase')

@section('docContent')

<div class="row align-items-center justify-content-center" style="min-height: 400px;">
		<div class="col-lg-6">
			<div class="card" style="border-radius:15px;">
			  	<h2 class="card-title text-center mt-2 mb-4">Patient Medical History</h2>
			  	<form class="mb-4 px-5 align-items-center" id ="modal-form" method="POST" action="{{url('/doc/viewpres/')}}">
            @csrf
            <?php $patients = DB::table('patients')->get();?>
            
                 <div class="form-group row">
                <label for="patient_id" class="col-sm-3 col-form-label">Patient ID</label>
                <div class="col-sm-9">
                  <select class="js-example-basic-single js-states" style="width: 100%;height: 40px;"data-live-search="true" placeholder="Patient ID" id="patient_id" name="patient_id">
                  @foreach($patients as $patient)
                    
                    <option value="{{$patient->id}}">{{$patient->id}}</option>
                  @endforeach
                </select>
                </div>
                
              </div>
               <div class="form-group row">
                <label for="type" class="col-sm-3 col-form-label">Type</label>
                <div class="col-sm-9">
                  <select class="js-example-basic-single js-states" style="width: 100%;height: 40px;"data-live-search="true" placeholder="Type" id="type" name="type">
                  
                    
                    <option value="prescription">Prescription</option>
                    <option value="report">Report</option>
                  
                </select>
                </div>
                
              </div>
        

				<button type="submit" class="btn btn-primary mb-2" style="float: right;">Submit</button>
				</form>
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