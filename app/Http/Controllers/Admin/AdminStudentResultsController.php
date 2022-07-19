<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Result;
use App\Models\Student;
use DB;
use Illuminate\Support\Facades\Auth;

class AdminStudentResultsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Result::orderBy('created_at', 'desc')->paginate(100);
        return view('admin.results.index')->with('results', $results);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.results.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'std_id' => 'required|unique:results',
        //     'subject' => 'required|unique:results',
        //     'term_one' => 'required',
        //     'term_two' => 'required',
        //     'term_three' => 'required'
        // ]);

        
        if (is_array($request->student_id) || is_object($request->student_id)){

            foreach ($request->student_id as $key => $insert) {

                $saveResults=[
                    'student_id' =>$request->student_id[$key],
                    'subject' =>$request->subject[$key],
                    'term_one' =>$request->term_one[$key],
                    'term_two' =>$request->term_two[$key],
                    'term_three' =>$request->term_three[$key]
                ];

                // if ($request->std_id) {
                //     return redirect()->back();
                // }
                
                DB::table('results')->insert($saveResults);
            }
        }

        return redirect('/adminstudentresults')->with('success', 'Student Results Added Successfully');
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
        $result=DB::table('results')->where('student_id', $student->id)->first();

        if (!DB::table('results')->where('student_id', $student->id)->exists()) {
            // return redirect('/adminstudentresults/create')->with('studentid', $studentid);
            return redirect('/admin/auth/srlogin');
        }
        // if ($result->student_id !== $student->id) {
        //     return redirect('/adminstudentresults/create')->with('error', 'No Match');
        // }

        // $results = Result::orderBy('created_at', 'desc')->paginate(100);
        // return view('admin.results.index')->with('results', $results);

        return view('/admin.results.index')->with('results', $result);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Result::find($id);
        if ($result->id) {
            $result->delete();
            return redirect()->back()->with('success', 'Result Removed Successfully');
        }
        return redirect('/adminstudentresults')->with('error', 'Check first');
    }
}
