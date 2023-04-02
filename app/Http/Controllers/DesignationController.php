<?php

namespace App\Http\Controllers;

use App\Models\Designation;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
  public function designation()
  {
    $designations=Designation::all();
    return view('backend.pages.designation.designationlist',compact('designations'));

  }
  public function designationCreate()
  {
    return view('backend.pages.designation.designationCreate');

  }
public function store(Request $request)
{
  Designation::create([
    'name'=>$request->name,
    'status'=>$request->status,

  ]);
  return redirect()->route('designation.list');
}

}
