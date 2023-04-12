<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Designation;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\LeaveBalance;
use App\Models\Leavetype;
use App\Models\Salary_structure;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Throwable;

class UserController extends Controller
{
    public function employee()
    {
        $employees = User::with("designation")->paginate(5);
        return view('backend.pages.employee.employeelist', compact('employees'));
    }

    public function  employeeCreate()
    {
        $designations = Designation::all();
        $departments = Department::all();
        $salary_structures = Salary_structure::all();
        return view('backend.pages.employee.employeeCreate', compact('designations', 'departments', 'salary_structures'));
    }

    public function store(Request $request)
    {

        $fileName='';
        if($request->hasFile('employee_image'))
        {
        $fileName=date('Ymdhis').'.'.$request->file('employee_image')->getClientOriginalExtension();

        $request->file('employee_image')->storeAs('/uploads',$fileName);


       }
       try{
        DB::beginTransaction();
        $user= User::create([
             'name' => $request->name,
             'number' => $request->number,
             'email' => $request->email,
             'password' =>bcrypt($request->password),
             'designation_id' => $request->designation_id,
             'department_id' => $request->department_id,
             'salary_structure_id' => $request->salary_structure_id,
             'status' => $request->status,
             'image'=>$fileName
 
         ]); 
 
         $leaveType=Leavetype::all();
         foreach($leaveType as $lt)
         {
             LeaveBalance::create([
                 'user_id'=>$user->id,
                 'leavetype_id'=>$lt->id,
                 'balance'=>$lt->days,
                 'status'=>'active'
             ]);
         }
         DB::commit();

       }catch(Throwable $e){
            DB::rollBack();
            return redirect()->back();
       }
      

        return redirect()->route('employee.list');
    }

    public function view($id)
    {
        $employees = User::find($id);

        return view('backend.pages.employee.view', compact('employees'));
    }
    public function delete($id)
    {
        User::find($id)->delete();

        return redirect()->back();
    }
}
