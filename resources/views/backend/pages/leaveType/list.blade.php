@extends('master')
@section('content')
<div class="row">
   <div class='col-md-3'></div>
   <div class='col-md-6'>
<table class="table table-striped">
<a href="{{route('leavetype.create')}}" class="btn btn-primary my-2">Add new</a>

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
    @foreach($leavetypes as $data)
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->days}}</td>
      <td>{{$data->description}}</td>
      <td>{{$data->status}}</td>
</tr>
@endforeach
  
  </tbody>
</table>
   </div>
@endsection