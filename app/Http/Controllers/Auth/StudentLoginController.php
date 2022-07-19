<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;

class StudentLoginController extends Controller
{
    public function getStudentLogin(){
        return view('students.auth.login');
    }

    public function postStudentLogin(Request $request){
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
            return redirect('/students')->with('success', 'Loged in Successfully');
            // return redirect()->route('')->with('success', 'Loged in Successfully');
        }else {
            return redirect()->back()->with('error', 'Invalid Credentials');
        }
    }
}
