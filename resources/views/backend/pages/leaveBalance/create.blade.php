@extends('master')
@section('content')
<form >
    @csrf
       <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-6">
               <div>
               <label for="">Name:</label>
               <input name="name" placeholder="Enter name" type="text" class="form-control">
               </div>
               <div>
               <label for="">Balance</label>
               <input name="days" placeholder="Enter days" type="number" class="form-control">
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