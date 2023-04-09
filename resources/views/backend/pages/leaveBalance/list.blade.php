@extends('master')
@section('content')
<div class="row">
   <div class='col-md-3'></div>
   <div class='col-md-6'>
<table class="table table-striped">
<a href="{{route('leavebalance.create')}}" class="btn btn-primary my-2">Add new</a>

  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Balance</th>
      <th scope="col">Status</th>

</tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>123</td>
      <td>Mark</td>
      

    </tr>
    
  </tbody>
</table>
   </div>

@endsection