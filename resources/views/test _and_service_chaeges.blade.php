@extends('layouts.base')

@section('header')
@include('navbar')

@endsection('header')

@section('content')

<div style="min-height: 650px; padding-right: 50px; padding-left: 50px; padding-top: 15px;">

<table class="table table-striped" >

  <thead>
    <tr>
      <th scope="col">S/N</th>
      <th scope="col">Service Category</th>
      <th scope="col">Service Name</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Ambulance</td>
      <td>Ambulance Service-2</td>
      <td>300 BDT</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Ambulance</td>
      <td>Ambulance Service-1</td>
      <td>700 BDT</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Blood Bank</td>
      <td> Blood Screening+Gouping</td>
      <td>1500 BDT</td>
      
    </tr>
    
    <tr>
      <th scope="row">4</th>
      <td>Dentist</td>
      <td>Per meeting</td>
      <td>1000 BDT</td>
     
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Eye Specialist</td>
      <td> Each visit</td>
      <td>500 BDT</td>
 
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>DIAGNOSTIC CHARGES</td>
      <td> Anesthesia</td>
      <td>1500 BDT</td>
 
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>DIAGNOSTIC CHARGES</td>
      <td> Anesthesia for MRI of Whole Spine</td>
      <td>3000 BDT</td>
      
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>DIAGNOSTIC CHARGES</td>
      <td>Anesthesia for MRI of Brain + EEG</td>
      <td>3000 BDT</td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td>DIAGNOSTIC CHARGES</td>
      <td> Anesthesia for ERCP (Critical)</td>
      <td>3000 BDT</td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td>DIAGNOSTIC CHARGES</td>
      <td>Anesthesia for Endoscopy</td>
      <td>3000 BDT</td>
    </tr>

  </tbody>
</table>
</div>
@endsection('content')

@section('footer')
@include('footer')
@endsection('footer')