<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeaveBalanceController extends Controller
{
    public function leaveBalance()
    {
        return view('backend.pages.leaveBalance.list');
    }
}
