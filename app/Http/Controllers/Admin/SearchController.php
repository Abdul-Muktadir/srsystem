<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Result;

class SearchController extends Controller
{
    public function search(){
        $search_text=$_GET['query'];
        $results=Result::where('student_id', 'LIKE', '%' .$search_text. '%')->paginate(6);

        return view('admin.results.index')->with('results', $results);
    }
}
