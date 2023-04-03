<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Designation;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Salary_structure;

class EmployeeController extends Controller
{
    public function employee()
    {
        $employees=Employee::paginate(3);
        
         return view('backend.pages.employee.employeelist',compact('employees'));

    }
    
    public function  employeeCreate()
    {
        $designations=Designation::all(); 
        $departments=Department::all();
        $salary_structures=Salary_structure::all();
        return view('backend.pages.employee.employeeCreate',compact('designations','departments','salary_structures'));
    }
 
    public function store(Request $request)
    {
    //dd($request->all());

        Employee::create([
            'name'=>$request->name,
            'number'=>$request->number,
            'email'=>$request->email,
            'designation_id'=>$request->designation_id,
            'department_id'=>$request->department_id,
            'salary_structure_id'=>$request->salary_structure_id,
            'status'=>$request->status,
        ]);
        
           return redirect()->route('employee.list');
    }

    public function view($id)
    {
       $employees=Employee::find($id);
      
        return view('backend.pages.employee.view',compact('employees'));
    }
    public function delete($id)
    {
        Employee::find($id)->delete();
        
        return redirect()->back();
    }

}
