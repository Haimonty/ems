@extends('master')
@section('content')
<div class="row">
   <div class='col-md-3'></div>
   <div class='col-md-6'>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Employee ID</th>
      <th scope="col">Employee Name</th>
      <th scope="col">Total leaves</th>
      <th scope="col">Approved leaves</th>
      <th scope="col">Left leaves</th>



    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>123</td>
      <td>Mark</td>
      <td>20</td>
      <td>03</td>
      <td>17</td>

    </tr>
    
  </tbody>
</table>
   </div>

@endsection