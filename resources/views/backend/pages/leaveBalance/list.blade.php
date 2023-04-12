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
      <th scope="col">Employee</th>
      <th scope="col">Leave Type</th>
      <th scope="col">Balance</th>
      <th scope="col">Status</th>


</tr>
  </thead>
  <tbody>
    @foreach($leavebalances as $data)
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->user->name}}</td>
      <td>{{$data->leavetype->name}}</td>
      <td>{{$data->balance}}</td>
      <td>{{$data->status}}</td>



    </tr>
    @endforeach
    
  </tbody>
</table>
   </div>

@endsection