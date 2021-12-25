@extends('patient.patbase')

@push('css')
<meta name="csrf-token" content="{{ csrf_token() }}" />
@endpush

@section('patContent')

<div class="row">
  <h3 class="mt-0">Available Doctors</h3>
	@foreach($res as $key=>$doctor)
    <div class="col-md-3">
      <div class="card" style="border-radius: 15px;">
      	<img class="card-img-top" src="{{asset('profile_pic/default_user.png')}}" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title m-0">{{ $doctor->name }}</h4>
          <h5 class="m-0">{{ $doctor->speciality }}</h5>
          <p class="m-0">{{ $doctor->college }}</p>
          <button type="button" class="btn btn-primary modal-btn" data-id = "{{$key}}" data-bs-toggle="modal" data-bs-target="#modal{{$key}}">Book Appointment</button>

          
          <div class="modal fade" id="modal{{$key}}">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Book Appointment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
               
               
              <div class="modal-body">

                <form class="mb-4 px-5 align-items-center" id ="modal-form" method="POST" action="{{route('apt.store')}}">
                  @csrf
                  <div class="row mb-2">
                    <div class="col-5">
                      <img style="height:80px;" src="{{asset('profile_pic/default_user.png')}}">
                    </div>
                    <div class="col-7">
                      <h4 class="m-0">{{ $doctor->name }}</h4>
                      <h5 class="m-0">{{ $doctor->speciality }}</h5>
                      <p class="m-0">{{ $doctor->college }}</p>
                      <p class="m-0">Sun,Mon,Tue,Wed,Thu,Fri</p>
                      <p class="m-0">6pm-8pm</p>
                    </div>
                  </div>
                  <input type="text" value="{{$doctor->id}}" name = "doc_id" id = "doc{{$key}}" hidden>
                  <input type="text" value="{{Auth::user()->id}}" name = "pat_id" id = "pat_id" hidden>
               
                  <div class="form-group row">
                    
                    <label class="p-1" for="date">Date</label>
                    <input type="date" id="date{{$key}}" name="date">
                  </div>
                  <div class="form-group row">
                    <label for="time">Time</label>
                    <input type="time" id="time{{$key}}" name="time">
                  </div>
                </form>
                 
                
              </div>
               <div class="modal-footer">
                  <button type="submit" id = "{{$key}}"class="btn btn-primary modal-form">Confirm</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
          </div>
        </div>
          
        </div>
      </div>
    </div>

    
    @endforeach
</div>


@endsection

@push('script')


<script type="text/javascript">
  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });



  $('.modal-form').click(function (e){
    e.preventDefault();
    var x = $(this).attr('id');

    var doc_id = $('#doc'+x).val();
    var pat_id = $("input[name=pat_id]").val();

    var date = $('#date'+x).val();
    var time = $('#time'+x).val();



     $.ajax({
           type:'POST',
           url:"{{ route('apt.store') }}",
           data:{doc_id: doc_id, pat_id:pat_id, date:date,time:time},
           success:function(json){
              alert(json.success);
           },
           error:function(request,status,error){
              alert(request.responseText);

           }
        });

      $("#modal"+x).modal('hide');
  
  });
</script>
@endpush

