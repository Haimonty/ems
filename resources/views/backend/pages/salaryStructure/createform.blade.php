@extends('master')
@section('content')

<form action="{{route('salaryStructure.store')}}" method='post'>
    @csrf
           <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-6">
                <div>
               <label for="">Salary Class</label>
               <input name="salaryclass" placeholder="Enter Salary class" type="txt" class="form-control">
               </div>

               <div>
               <label for="">Basic Salary</label>
               <input name="basic" placeholder="Enter Basic Salary" type="number" class="form-control">
               </div>

               <div>
               <label for="">Medical Expenses</label>
               <input name="medicals" placeholder="medical expenses" type="number" class="form-control">
               </div>
               <div>
               <label for="">Mobile Bill</label>
               <input name="mobile_bill" placeholder="mobile bill" type="number" class="form-control">
               </div>
               <div>
               <label for="">Special</label>
               <input name="special" placeholder="Special" type="number" class="form-control">
               </div>
               <div>
               <label for="">Bonus</label>
               <input name="bonus" placeholder="Bonus" type="number" class="form-control">
               </div>

               <div>
                   <label for="">Select Status </label>
                   <select name="status" id="" class="form-control">
                       <option value="active">Active</option>
                       <option value="inactive">inactive</option>
                   </select>
               </div>

                <div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
                </form>
           </div>
           <div class="col-md-4"></div>

       </div>
    


@endsection