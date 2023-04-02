<?php

namespace App\Http\Controllers;

use App\Models\Attendence;
use Illuminate\Http\Request;

class AttendenceController extends Controller
{
    public function attendence()
    {
      $attendences=Attendence::all();
      return view('backend.pages.attendence.attendencelist',compact('attendences'));
    }

  
    public function store(Request $request)
    {
      Attendence::create([
      'in_time'=>$request->in_time,
      'out_time'=>$request->out_time,
      'date'=>$request->date,
      ]);
      return redirect()->route('attendence.list');

    }
    public function checkin(){
      Attendence::create([
        'in_time'=>now(),
        'date'=>now()->toDateString(),
      ]);
      return redirect()->back();
    }
    public function checkout(Request $request){
      $attendence = Attendence::whereDate("date",now())->where("user_id",1)->first();
      $attendence->update([
        'out_time'=>now()
      ]);
      return redirect()->back();
    }
}
