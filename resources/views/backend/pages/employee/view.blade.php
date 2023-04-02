@extends('master')
@section('content')
<div class="row">
           <div class="col-md-5"></div>
           <div class="col-md-6">
<label for="name">Employee Name:</label>
    <input type="text" value="{{$employee->name}}" readonly class="form-control">
<label for="number">Phone Number:</label>
    <input type="number" value="{{$employee->number}}" readonly class="form-control">
<label for="email">Email:</label>
    <input type="email" value="{{$employee->email}}" readonly class="form-control">
<label for="designation">Designation:</label>
    <input type="designation" value="{{$employee->designation->name}}" readonly class="form-control">
<label for="department">Department:</label>
    <input type="department" value="{{$employee->department->name}}" readonly class="form-control">


    <a href="{{route('employee.list')}}" class="btn btn-success">Back</a>
    <div class="col-md-1"></div>

@endsection