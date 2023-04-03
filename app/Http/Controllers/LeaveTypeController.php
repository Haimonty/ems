<?php

namespace App\Http\Controllers;

use App\Models\LeaveType;
use Illuminate\Http\Request;

class LeaveTypeController extends Controller
{
    public function leaveType()
    {
        return view('backend.pages.leaveType.list');
    }
    public function create()
    {
        return view('backend.pages.leaveType.create');
    }
    public function store(Request $request)
    {
      LeaveType::create([
         
        'name'=>$request->name,
        'days'=>$request->days,
        'description'=>$request->description,
        'status'=>$request->status,


      ]); 
      return redirect()->back();
    }
}
