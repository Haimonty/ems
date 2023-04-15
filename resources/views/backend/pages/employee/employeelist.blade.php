@extends('master')
@section('content')

  <table class="table table-striped">
    <a href="{{url('/employee/create')}}" class="btn btn-primary my-2">Add new</a>

    <h2 class="section-title px-5"><span class="px-2"> {{request()->search_key}}</span></h2>


    
  <thead>
    
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Image<th>
     <th scope="col">Email</th>
      <th scope="col">Number</th>
      <th scope="col">Designation</th>      
      <th scope="col">Department</th>
      <th scope="col">Salary_structure</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>

    </tr>
 </thead>
  <tbody>
  @foreach($employees as $key=>$data)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->role}}</td>
      <td>
                <img src="{{url('/uploads/'.$data->image)}}" width="50" alt="image">
            </td>

       <td>{{$data->email}}</td>
       
       <td>{{$data->number}}</td>
       <td>{{optional($data->designation)->name}}</td>
      <td>{{optional($data->department)->name}}</td>
      <td>{{optional($data->salary_structure)->salaryclass}} </td>
      <td>{{$data->status}}</td>

     <td>
      <a href="{{route('employee.view',$data->id)}}"class="btn btn-success">Veiw</a>
      <a href="{{route('employee.delete',$data->id)}}"class="btn btn-danger">Delete</a>

     </td>

    </tr>
    @endforeach
  </tbody>
</table>
{{$employees->links()}}

  
@endsection