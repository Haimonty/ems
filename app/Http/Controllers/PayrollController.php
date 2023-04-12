<?php

namespace App\Http\Controllers;

use App\Models\Payroll;
use App\Models\Salary_structure;
use App\Models\User;
use Illuminate\Http\Request;

class PayrollController extends Controller
{
    public function payroll()

    {
        $payrolls=Payroll::with('user','salarystructure')->get();
        return view('backend.pages.payroll.list',compact('payrolls'));

    }
    public function create()
    {
        $users = User::all();
        $salary_structures = Salary_structure::all();
        return view('backend.pages.payroll.create',compact('users','salary_structures'));
    }
    public function store(Request $request)
    {
     Payroll::create([
        'user_id'=>$request->user_id,
        'salary_structure_id'=>$request->salary_structure_id,
        'month'=>$request->month,
        'status'=>$request->status,

        ]);
        return redirect()->route('payroll.list');
    }

}
