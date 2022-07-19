<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function adminDashboard(){
        return view('admin.dashboard');
    }

    public function logout(){
        auth()->logout();
        return redirect()->route('getLogin')->with('success', 'You are successfully logout');
    }

    
}
