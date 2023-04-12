<?php

namespace App\Http\Controllers;

use toastr;
use DateTime;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Leave;
use App\Models\LeaveBalance;
use Illuminate\Http\Request;

class LeaveController extends Controller
{
    public function leave()
    {
        $leaves=Leave::with("user","leavetype")->get();
       return view('backend.pages.leave.list',compact('leaves'));
    }
    public function create()
    {
        $users=User::all();
        $leavetypes=LeaveBalance::with('leavetype')->where('user_id',auth()->user()->id)->get();
        // dd($leavetypes);
        return view('backend.pages.leave.create',compact('users','leavetypes'));
    }
    public function store(Request $request)
    {
        $request->validate([
        'fromdate'=>'required',
        'todate'=>'required|after:fromdate',
        ]);
        
        $fdate=$request->fromdate;
        $tdate=$request->todate;
    
        $datetime1 = new DateTime($fdate);
        $datetime2 = new DateTime($tdate);
    
        $days = $datetime2->diff($datetime1)->format('%a');

        //check employee has balance
        $leaveBalance=LeaveBalance::where('user_id',$request->user_id)
        ->where('leavetype_id',$request->leavetype_id)->first();
        
        if($leaveBalance->balance<=$days)

        {
            //dd($request->all());
            Leave::create([
                'user_id'=>$request->user_id,
                'title'=>$request->title,
                'fromdate'=>$request->fromdate,
                'todate'=>$request->todate,
                'leavetype_id'=>$request->leavetype_id,
                'status'=>'pending',
                'remarks'=>$request->remarks,
            ]);
    
            // remove from leave balance
            $leaveBalance->decrement('balance',$days);
            //message : leave applied success
            toastr()->success('Data has been saved successfully!', 'Congrats');

            return redirect()->route('leave.list');
        }
    //  message: insufficiant balance
      
        return redirect()->route('leave.list');
    }
}
