@extends('master')
@section('content')
<form action="{{route('leavebalance.store')}}"  method='post'>
    @csrf
       <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-6">
           <div>
                   <label for="">Select Employee</label>
                   <select name="user_id" id="" class="form-control">
                    @foreach($users as $data)
                       <option value="{{$data->id}}">{{$data->name}}</option>
                   @endforeach
                   </select>
               </div>
               <div>
                   <label for="">Select leave Type</label>
                   <select name="leavetype_id" id="" class="form-control">
                    @foreach($leavetypes as $data)
                       <option value="{{$data->id}}">{{$data->name}}.{{$data->days}}</option>
                       @endforeach
                   </select>
               </div>
              

               <div>
               <label for="">Balance</label>
               <input name="balance" placeholder="Enter days" type="number" class="form-control">
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
           <div class="col-md-4"></div>

       </div>
    </form>
@endsection