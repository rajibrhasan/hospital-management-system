@extends('doctor.docbase')
@section('docContent')

	<div class="row">
    <div class="col-6">
      <div class="card">
        <img class="card-img-top"src="{{'images/car1.jpg'}}" style="height: 300px;" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Upcoming Appointments</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-6">
      <div class="card">
        <img class="card-img-top"src="{{'images/car2.png'}}" style="height: 300px;" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Recent Appointments</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="editmodal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Update Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
               
              <div class="modal-body">

                <form class="mb-4 px-5 align-items-center" id ="modal-form" method="POST" action="">
            
                  <div class="row mb-2">
                  	<input type="text" value="{{Auth::user()->id}}"  id ="user_id" hidden>
                    <div class="col-6">
                    	<label for="speciality">Speciality</label>
                      <input type="text" id="speciality" name="speciality">
                    </div>
                    <div class="col-6">
                    	<label for="hospital">Hospital</label>
                      <input type="text" id="hospital" name="hospital">
                      
                   </div>
                   <div class="col-6">
                    	<label for="post">Post</label>
                      <input type="text" id="post" name="post">
                      
                   </div>
                  </div>
                </form>
                 
                
              </div>
               <div class="modal-footer">
                  <button type="submit" id = ""class="btn btn-primary modal-form">Confirm</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
