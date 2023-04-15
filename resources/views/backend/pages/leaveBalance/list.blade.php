@extends('master')
@section('content')

<div class="row">
   <div class='col-md-2'></div>
   <div class='col-md-8'>

<h1>Leave Balance</h1>

<table class="table table-striped">

  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Employee</th>
      <th scope="col">LeaveType</th>

      <th scope="col">Balance</th>
      <th scope="col">Status</th>


</tr>
  </thead>
  <tbody>
    @foreach($leavebalances as $key=>$data)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->user?->name}}</td>
      <td>{{$data->leavetype->name}}</td>
      <td>{{$data->balance}}</td>
      <td>{{$data->status}}</td>
   </tr>
    @endforeach
    
  </tbody>
</table>
   </div>

@endsection