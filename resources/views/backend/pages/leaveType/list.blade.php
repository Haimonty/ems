@extends('master')
@section('content')
<div class="row">
   <div class='col-md-3'></div>
   <div class='col-md-6'>
<table class="table table-striped">
  
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Days</th>
     <th scope="col">Description</th>
     <th scope="col">Status</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Sick</td>
      <td>03-07</td>
      <td>Should give valid medical report</td>
      <td>Active</td>

    </tr>
  
  </tbody>
</table>
   </div>
@endsection