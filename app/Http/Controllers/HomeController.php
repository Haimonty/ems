<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function home(){

        return view('dashboard');
    }
  public function login()
  {
    return view('backend.pages.login');
  }

  public function dologin(Request $request)
  {
    $validate=Validator::make($request->all(),[
        'email'=>'required',
        'password'=>'required|min:5',
     ]);
     if($validate->fails())
        {
           
            return redirect()->back();
        }

        $credentials=$request->only(['email','password']);
        if(auth()->attempt($credentials)){
            return redirect()->route('home');
        }
            return redirect()->back();
  }
  
}
