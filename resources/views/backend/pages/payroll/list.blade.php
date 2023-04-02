@extends('master')
@section('content')

<div class="row">
   <div class='col-md-3'></div>
   <div class='col-md-6'>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Emp_ID</th>
      <th scope="col">Total leavehours</th>
      <th scope="col">Total salary</th>
      <th scope="col">Deducted Amount</th>
      <th scope="col">Adjusted salary</th>

</tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>123</td>
      <td>10</td>
      <td>25000</td>
      <td>2000</td>
      <td>23000</td>



    </tr>
   
  </tbody>
</table>
   </div>

@endsection