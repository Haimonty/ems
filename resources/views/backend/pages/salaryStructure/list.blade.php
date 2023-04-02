@extends('master')
@section('content')

<div class="row">
  <div class='col-md-3'></div>
     <div class='col-md-6'>
        <table class="table ">
        <a href="{{route('salaryStructure.create')}}" class="btn btn-primary">Add new</a>
 

        <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">salaryclass</th>

        <th scope="col">Basic Salary</th>
        <th scope="col">Medical Expenses</th>
        <th scope="col">Mobile Bill</th>
        <th scope="col">Special</th>
        <th scope="col">Bonus</th>

        </tr>
        </thead>
        <tbody>
          @foreach($salary_structures as $data)
<tr>
        <td scope="row">{{$data->id}}</td>
        <td scope="row">{{$data->salaryclass}}</td>

        <td>{{$data->basic}}</td>
        <td>{{$data->medicals}}</td>
        <td>{{$data->mobile_bill}}</td>
        <td>{{$data->special}}</td>
        <td>{{$data->bonus}}</td>


</tr>
@endforeach

   
        </tbody>
        </table>
    </div>
    <div class='col-md-3'></div>

</div>

@endsection