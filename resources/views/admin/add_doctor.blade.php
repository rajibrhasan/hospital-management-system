@extends('admin.adminbase')
@section('adContent')

@include('admin.css')


<div class="row">
    <div class="col-md-4">
        <div class="card">
            <img class="card-img-top" src="{{'images/apt.jpg'}}" style="height: 300px;" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Appointments</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <img class="card-img-top" src="{{'images/pres.jpg'}}" style="height: 300px;" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Prescriptions</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <img class="card-img-top" src="{{'images/pres.jpg'}}" style="height: 300px;" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Reports</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid page-body-wrapper" style="background-color: white;">
    <div class="container" aligne="center" style="padding-top: 100px;">

        <form style="color: black;">
            <div style="padding: 15px;">
                <label>Doctor Name</label>
                <input type="text" name="name" style="color:blue;" placeholder="Write the name">
            </div>

            <div style="padding: 15px;">
                <label>Phone</label>
                <input type="text" name="number" style="color:blue;" placeholder="Write the Phone Number">
            </div>

            <div style="padding: 15px;">
                <label>Speciality</label>

                <select name="speciality" style="color: blue; width: 200px;">

                    <option> Select </option>
                    <option value="medicine">Medicine</option>
                    <option value="dentist">Dentist</option>
                    <option value="gastroenterology">Gastroenterology</option>
                    <option value="food & nutrition">Food & Nutrition</option>
                    <option value="skin">Skin</option>
                    <option value="heart">Heart</option>
                    <option value="eye">Eye</option>
                    <option value="nose">Nose</option>
                    <option value="neurologist">Neurologist</option>

                </select>

            </div>

            <div style="padding: 15px;">
                <label>Room no.</label>
                <input type="text" name="room" style="color:blue;" placeholder="Write the Room no.">

            </div>

            <div style="padding: 15px;">
                <label>Doctor Image</label>
                <input type="file" name="file">

            </div>


            <div style="padding: 15px;">
                <input type="submit" class="btn btn-success">

            </div>
        </form>
    </div>
</div>

@endsection