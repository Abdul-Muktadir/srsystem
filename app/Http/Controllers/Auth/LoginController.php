<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function getLogin(){
        return view('auth.login');
    }

    public function postLogin(Request $request){
        // print('Hi');
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        $validated=auth()->attempt([
            'email'=>$request->email,
            'password'=>$request->password,
            'is_admin'=>1
        ]);

        if ($validated) {
            return redirect('/admin')->with('success', 'Login Successful');
        }else{
            return redirect()->back()->with('error', 'Invalid Credentials');
        }
    }

    public function getSRLogin(){
        return view('auth.srlogin');
    }

    public function postSRLogin(Request $request){
        $this->validate($request, [
            'student_id'=>'required',
            'grade'=>'required',
            'password'=>'required'
        ]);

        $validated=auth()->guard('student')->attempt([
            'student_id'=>$request->student_id,
            'grade'=>$request->grade,
            'password'=>$request->password
        ]);
        if ($validated) {
            return redirect('/adminstudentresults/create')->with('success', 'Loged in Successfully');
            // return redirect()->route('')->with('success', 'Loged in Successfully');
        }else {
            return redirect()->back()->with('error', 'Invalid Credentials');
        }
    }
}
