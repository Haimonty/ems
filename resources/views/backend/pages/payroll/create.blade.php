@extends('master')
@section('content')

<form action="{{route('payroll.store')}}"  method='post'>
@csrf

       <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-8">
               <div>
               <label for="">Enter Employee ID</label>
               <select name="user_id" id=""class="form-control"> 
                    @foreach($users as $data)
                    <option value="{{$data->id}}">{{$data->name}}</option>
                    @endforeach
               </select>

               </div>

               <div>
               <label for="salary_structure_id">salary_structure </label>
               <select name="salary_structure_id" id=""class="form-control"> 
               @foreach($salary_structures as $data)
               <option value="{{$data->id}}">{{$data->salaryclass}}</option>
               @endforeach
              </select>
          </div>
          <div>
          <div>
                   <label for="">Select Month</label>
                   <select name="month" id="" class="form-control">
                       <option value="january">January</option>
                       <option value="february">February</option>
                       <option value="March">March</option>
                       <option value="April">April</option>
                       <option value="May">May</option>
                       <option value="June">June</option>
                       <option value="July">July</option>
                       <option value="August">August</option>
                       <option value="September">September</option>
                       <option value="October">October</option>
                       <option value="November">November</option>
                       <option value="December">December</option>
                   </select>
               </div>
               
               
               <div>
                   <label for="">Select Status</label>
                   <select name="status" id="" class="form-control">
                       <option value="active">Active</option>
                       <option value="inactive">InActive</option>
                   </select>
               </div>


                <div>
                    <button type="submit" class="btn btn-success">Create</button>
                </div>

           </div>
           <div class="col-md-2"></div>

       </div>
    </form>

@endsection