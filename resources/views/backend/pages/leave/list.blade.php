@extends('master')
@section('content')
<div class="row">
   <div class='col-md-3'></div>
   <div class='col-md-6'>
<table class="table table-striped">
  <a href="{{route('leave.create')}}" class="btn btn-primary my-2">Apply leave</a>
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Employee Name</th>
      <th scope="col">Title</th>

      <th scope="col">From Date</th>
      <th scope="col">To Date</th>
      <th scope="col">Leave-type</th> 
      <th scope="col">Status</th> 
      <th scope="col">Remarks</th> 

    </tr>
  </thead>
  <tbody>
    @foreach($leaves as $data)
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->user->name}}</td>
      <td>{{$data->title}}</td>
      <td>{{$data->fromdate}}</td>
      <td>{{$data->todate}}</td>
      <td>{{$data->leavetype->name}}</td>
      <td>{{$data->status}}</td>
      <td>{{$data->Remarks}}</td>
   </tr>
  @endforeach
  </tbody>
</table>
   </div>
@endsection