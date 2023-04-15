<?php

namespace App\Http\Controllers;

use App\Models\Attendence;
use Carbon\Carbon;
// use Carbon\Carbon;
use Illuminate\Http\Request;
 use Illuminate\Contracts\Auth\Factory;
 use Illuminate\Contracts\Auth\Guard;

class AttendenceController extends Controller
{
    public function attendence()
    {
      $attendences=Attendence::where('user_id',auth()->user()->id)->get();
      // dd( $attendences[0]->out_time);
      return view('backend.pages.attendence.attendencelist',compact('attendences'))->with('data', $attendences);
      
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
      $isAttendence = Attendence::whereDate("date",now())->where("user_id",auth()->user()->id)->first();

     
      if($isAttendence){
        toastr()->error('already checked in');
        return redirect()->back();
      }
      Attendence::create([
        'in_time'=>now(),
        'date'=>date('Y-m-d'),
        'user_id'=>auth()->user()->id
      ]);
      toastr()->success("Checkedin done");
      return redirect()->back();
    }
    public function checkout(Request $request){
      $attendence = Attendence::whereDate("date",now())->where('user_id',auth()->user()->id)->first();


      if(isset($attendence->out_time)){
        toastr()->error('already checked out');
        return redirect()->back();
      }
      $attendence->update([
        'out_time'=>now()
      ]);
      return redirect()->back();
    }
    
}
