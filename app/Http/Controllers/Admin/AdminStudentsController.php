<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Helpers\Helper;

class AdminStudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.student.index')->with('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.student.create');
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
            'grade'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'gender'=>'required',
        ]);
            $student_id=Helper::IDGenerator(new Student, 'student_id', 5, 'STD');
        $student= new Student;
        $student->name = $request->input('name');
        $student->student_id = $student_id;
        $student->email = $request->input('email');
        $student->password = bcrypt($request->input('password'));
        $student->grade = $request->input('grade');
        $student->phone = $request->input('phone');
        $student->address = $request->input('address');
        $student->gender = $request->input('gender');
        $student->save();

        return redirect('/adminstudent')->with('success', 'Student Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        if (!$student->id) {
            return redirect('/adminstudent')->with('error', 'No Match');
        }

        return view('/admin.student.edit')->with('student', $student);
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
            'grade'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'gender'=>'required',
        ]);

        $student= Student::find($id);
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->grade = $request->input('grade');
        $student->phone = $request->input('phone');
        $student->address = $request->input('address');
        $student->gender = $request->input('gender');
        $student->save();

        return redirect('/adminstudent')->with('success', 'Student Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);

        if (!$student->id) {
            return redirect('/adminstudent')->with('error', 'There is no match');
        }

        $student->delete();

        return redirect('/adminstudent')->with('success', 'Student was successfully deleted');
    }
}
