@extends('master')
@section('content')

<div class="row">
   <div class='col-md-3'></div>
   <div class='col-md-6'>
<table class="table table-striped">
  <a href="{{route('payroll.create')}}" class="btn btn-primary my-2">Add new</a>
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Emp_Id</th>
      <th scope="col">Salary_Class</th>
      <th scope="col">TotalSalary</th>
      <th scope="col">Totalworkinghour</th>
      <th scope="col">Per_hour_rate</th>
      <th scope="col">Month</th>
      <th scope="col">Status</th>

</tr>
  </thead>

  <tbody>
@foreach($payrolls as $data)
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->user->name}}</td>
      <td>{{$data->salarystructure->salaryclass}} </td>
      <td>{{$data->totalSalary}}</td>
      <td>{{$data->totalworkinghour}}</td>
      <td>{{$data->per_hour_rate}}</td>
      <td>{{$data->month}}</td>
      <td>{{$data->status}}</td>
 </tr>
 @endforeach
   
  </tbody>
</table>
   </div>

@endsection