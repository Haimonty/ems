@extends('master')
@section('content')
<div class="row">
   <div class='col-md-3'></div>
   <div class='col-md-6'>
   <a href="{{url('/designation/create')}}" class="btn btn-primary">Add new</a>


   <table class="table">

<thead>


<tr>
    <th scope="col">Id</th>
    <th scope="col">Name</th>
    <th scope="col">Status</th>

  </tr>
</thead>
<tbody>
  @foreach($designations as $data)
  <tr>
    <th scope="row">{{$data->id}}</th>
    <td>{{$data->name}}</td>
    <td>{{$data->status}}</td>

  </tr>
 @endforeach
</tbody>
</table>


   </div>
   <div class='col-md-3'></div>

  





</div>

@endsection