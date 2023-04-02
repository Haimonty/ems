<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeaveTypeController extends Controller
{
    public function leaveType()
    {
        return view('backend.pages.leaveType.list');
    }
}
