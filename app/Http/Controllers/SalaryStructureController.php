<?php

namespace App\Http\Controllers;

use App\Models\Salary_structure;
use App\Models\SalaryStructure;
use Illuminate\Http\Request;

class SalaryStructureController extends Controller
{
    public function salaryStructure()

    {
        $salary_structures=Salary_structure::all();

       
        return view('backend.pages.salaryStructure.list',compact('salary_structures'));
    }

    public function create()
    {
        return view('backend.pages.salaryStructure.createform');
    }
    public function store(Request $request)
   { 
    //dd($request->all());
    Salary_structure::create([
    'salaryclass'=>$request->salaryclass,
    'basic'=>$request->basic,
    'medicals'=>$request->medicals,
    'mobile_bill'=>$request->mobile_bill,
    'special'=>$request->special,
    'bonus'=>$request->bonus,



    ]);

    return redirect()->route('salaryStructure.list');
   }
        
}
