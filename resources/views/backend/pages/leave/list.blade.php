@extends('master')
@section('content')
<div class="row">
   <div class='col-md-2'></div>
   <div class='col-md-8'>
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
      @if(auth()->user()->role=='admin')
      <th scope="col">Remarks</th> 
      @endif
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
      @if(auth()->user()->role=='admin')

      <td>
      <a href="{{route('leave.approve',$data->id)}}"class="btn btn-success">Approve</a>
      <a href="{{route('leave.reject',$data->id)}}"class="btn btn-danger">Reject</a>


      </td>
      @endif
   </tr>
  @endforeach
  </tbody>
</table>
   </div>
@endsection