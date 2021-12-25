@extends('patient.patbase')
@section('patContent')

	<div class="row">
    <div class="col-6">
      <div class="card">
        <img class="card-img-top"src="{{'images/apt.jpg'}}" style="height: 300px;" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">My Appointments</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-6">
      <div class="card">
        <img class="card-img-top"src="{{'images/pres.jpg'}}" style="height: 300px;" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">My Prescriptions</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
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

    var sp = $('#speciality').val();
    var hos = $('#hospital').val();
    var post = $('#post').val();
    var id = $('#user_id').val();

    console.log(sp);
    console.log(hos);
    console.log(post);
    console.log(id);



     $.ajax({
           type:'POST',
           url:'doc/update',
           data:{sp: sp, hos:hos, post:post,doc_id:id},
           success:function(json){
              alert(json.success);
           },
           error:function(request,status,error){
              alert(request.responseText);

           }
        });

      $(".editmodal").modal('hide');
  
  });
</script>
@endpush

 