@extends('master')
@section('content')
<div class="row">
   <div class='col-md-3'></div>
   <div class='col-md-6'>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Employee Name</th>
      <th scope="col">Employee ID</th>
      <th scope="col">From Date</th>
      <th scope="col">To Date</th>
      <th scope="col"> leave-type</th>  
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>123456</td>
      <td>1/02/23</td>
      <td>3/02/23</td>
      <td>Sick</td>

    </tr>
  
  </tbody>
</table>
   </div>
@endsection