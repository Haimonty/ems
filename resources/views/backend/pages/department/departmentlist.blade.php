@extends('master')
@section('content')
<div class="row">
   <div class='col-md-3'></div>
   <div class='col-md-6'>
<table class="table">

  <thead>
  <a href="{{url('/department/create')}}" class="btn btn-primary">Add new</a>

  
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($departments as $data)
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->status}}</td>
      <td>
      <a href="{{route('department.view',$data->id)}}"class="btn btn-success">Veiw</a>
      <a href="{{route('department.delete',$data->id)}}"class="btn btn-danger">Delete</a>

      </td>
      
    </tr>

  @endforeach
   
  </tbody>
</table>
   </div>

</table>
@endsection