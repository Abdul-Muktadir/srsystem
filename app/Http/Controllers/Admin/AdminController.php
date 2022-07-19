<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::orderBy('created_at', 'desc')->get();
        return view('admin.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'gender'=>'required',
            'subject'=>'required',
        ]);

        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        $user->gender = $request->input('gender');
        $user->subject = $request->input('subject');
        $user->save();

        return redirect('/admin')->with('success', 'User added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        if (!Auth::check()){
            return redirect('/auth/login')->with('error', 'Unauthorize Page');
        }
        return view('admin.show')->with('user', $user);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        if (!$user->id) {
            return redirect('/admin');
        }
        return view('admin.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'=>'required',
            'email'=>'required',
            // 'password'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'gender'=>'required',
            'is_admin'=>'required',
        ]);

        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        // $user->password = $request->input('password');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        $user->gender = $request->input('gender');
        $user->is_admin = $request->input('is_admin');
        $user->subject = $request->input('subject');
        $user->save();

        return redirect('/admin')->with('success', 'User added successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if ($user->id) {
            $user->delete();
            return redirect()->back()->with('success', 'Teacher Removed Successfully');
        }
    }
}
