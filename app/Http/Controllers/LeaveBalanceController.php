<?php

namespace App\Http\Controllers;

use App\Models\LeaveBalance;
use App\Models\Leavetype;
use App\Models\User;
use Illuminate\Http\Request;

class LeaveBalanceController extends Controller
{
    public function leaveBalance()
    {
        $leavebalances=LeaveBalance::with('user','leavetype')->get();
        return view('backend.pages.leaveBalance.list',compact('leavebalances'));
    }
    public function create()
    {
        $users=User::all();
        $leavetypes=Leavetype::all();

        return view('backend.pages.leaveBalance.create',compact('users','leavetypes'));
    }
    public function store(Request $request)
    {
        LeaveBalance::create([
            'user_id'=>$request->user_id,
            'leavetype_id'=>$request->leavetype_id,
            'balance'=>$request->balance,
            'status'=>$request->status,


        ]);
        return redirect()->route('leaveBalance.list');

    }
}
