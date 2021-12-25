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
      <th scope="col">Job Type</th>
      <th scope="col">Job Description</th>
      <th scope="col">Salary</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Pharmacist</td>
      <td> 1yrs - 2yrs experience</td>
      <td>Negotiable</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Ambulance Driver</td>
      <td> Minimum 2yrs experience</td>
      <td>Negotiable</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Nurse</td>
      <td> 1yrs - 2yrs experience</td>
      <td>Negotiable</td>
      
    </tr>
    
    <tr>
      <th scope="row">4</th>
      <td>Dentist</td>
      <td> 2yrs experience</td>
      <td>Negotiable</td>
     
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Eye Specialist</td>
      <td> 1yrs - 2yrs experience</td>
      <td>Negotiable</td>
 
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Staff</td>
      <td> 1yrs - 2yrs experience</td>
      <td>Negotiable</td>
 
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>HRM</td>
      <td> 1yrs - 2yrs experience</td>
      <td>Negotiable</td>
      
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>Biotech Analyst</td>
      <td> 1yrs - 2yrs experience</td>
      <td>Negotiable</td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td>Cardiologist</td>
      <td> 1yrs - 2yrs experience</td>
      <td>Negotiable</td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td>Neurosurgeon</td>
      <td> 1yrs - 2yrs experience</td>
      <td>Negotiable</td>
    </tr>

  </tbody>
</table>
</div>
@endsection('content')

@section('footer')
@include('footer')
@endsection('footer')