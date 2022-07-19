<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentDashboardController extends Controller
{
    public function studentLogout(){
        auth()->logout();
        return redirect()->route('getStudentLogin')->with('success', 'You are successfully logout');
    }
}
