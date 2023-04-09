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
      $isAttendence = Attendence::whereDate("date", now())->where("user_id",1)->first();
      if(isset($isAttendence)){
        notify()->warning("Already Checkedin");
        return redirect()->back();
      }
      Attendence::create([
        'in_time'=>now(),
        'date'=>now()->toDateString(),
      ]);
      return redirect()->back();
    }
    public function checkout(Request $request){
      $attendence = Attendence::whereDate("date",now())->where("user_id",1)->first();
      if(isset($attendence->out_time)){
        notify()->warning("Already Checked Out");
        return redirect()->back();
      }
      $attendence->update([
        'out_time'=>now()
      ]);
      return redirect()->back();
    }
}
