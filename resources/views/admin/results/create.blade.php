@extends('admin.layouts.app')

@section('content-header')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Add New Results</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
      <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
    </div>
    <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
      <span data-feather="calendar"></span>
      This week
    </button>
  </div>
</div>
@endsection

@section('body')
<div class="card-body">
        @if (session('error'))
            <div class="text-danger text-center">{{session('error')}}</div>
        @endif
    <div class="tab-content">
        <div class="row">
            @if (Auth::guard('student')->check())
                <p><strong>{{Auth::guard('student')->user()->student_id}}</strong></p>
                {{-- <p>{{$studentid->id}}</p> --}}
            <div class="col-md-4">
                <h3>First Term</h3>
                    {!! Form::open(['action' => ['App\Http\Controllers\Admin\AdminStudentResultsController@store'], 'method' => 'POST']) !!}
                    <div class="form-group row">
                    <label for="inputExperience" class="col-sm-2 col-form-label">English</label>
                    <div class="col-sm-10">
                    {{ Form::hidden('student_id[]', Auth::guard('student')->user()->id, ['class' => 'form-control']) }}
                    {{ Form::number('term_one[]', '', ['class' => 'form-control']) }}
                    {{ Form::hidden('subject[]', 'English', ['class' => 'form-control']) }}
                    </div>
                    </div><br>
                    <div class="form-group row">
                    <label for="inputExperience" class="col-sm-2 col-form-label">Maths</label>
                    <div class="col-sm-10">
                    {{ Form::hidden('student_id[]', Auth::guard('student')->user()->id, ['class' => 'form-control']) }}
                    {{ Form::number('term_one[]', '', ['class' => 'form-control']) }}
                    {{ Form::hidden('subject[]', 'Maths', ['class' => 'form-control']) }}
                    </div>
                    </div><br>
                    <div class="form-group row">
                    <label for="inputExperience" class="col-sm-2 col-form-label">Science</label>
                    <div class="col-sm-10">
                    {{ Form::hidden('student_id[]', Auth::guard('student')->user()->id, ['class' => 'form-control']) }}
                    {{ Form::number('term_one[]', '', ['class' => 'form-control']) }}
                    {{ Form::hidden('subject[]', 'Science', ['class' => 'form-control']) }}
                    </div>
                    </div><br>
                    <div class="form-group row">
                    <label for="inputExperience" class="col-sm-2 col-form-label">Social</label>
                    <div class="col-sm-10">
                    {{ Form::hidden('student_id[]', Auth::guard('student')->user()->id, ['class' => 'form-control']) }}
                    {{ Form::number('term_one[]', '', ['class' => 'form-control']) }}
                    {{ Form::hidden('subject[]', 'Social', ['class' => 'form-control']) }}
                    </div>
                    </div><br>
                    <div class="form-group row">
                    <label for="inputExperience" class="col-sm-2 col-form-label">I. C. T</label>
                    <div class="col-sm-10">
                    {{ Form::hidden('student_id[]', Auth::guard('student')->user()->id, ['class' => 'form-control']) }}
                    {{ Form::number('term_one[]', '', ['class' => 'form-control']) }}
                    {{ Form::hidden('subject[]', 'I. C. T', ['class' => 'form-control']) }}
                    </div>
                    </div><br>
                    <div class="form-group row">
                    <label for="inputExperience" class="col-sm-2 col-form-label">French</label>
                    <div class="col-sm-10">
                    {{ Form::hidden('student_id[]', Auth::guard('student')->user()->id, ['class' => 'form-control']) }}
                    {{ Form::number('term_one[]', '', ['class' => 'form-control']) }}
                    {{ Form::hidden('subject[]', 'French', ['class' => 'form-control']) }}
                    </div>
                    </div><br>
                    {{-- Form close --}}
                    </div>
                    <div class="col-md-4">
                    <!-- /.tab-pane -->
                <h3>Second Term</h3>
                <div class="form-group row">
                    <div class="col-sm-10">
                    {{ Form::number('term_two[]', '', ['class' => 'form-control']) }}
                    </div>
                    </div><br>
                    <div class="form-group row">
                    <div class="col-sm-10">
                    {{ Form::number('term_two[]', '', ['class' => 'form-control']) }}
                    </div>
                    </div><br>
                    <div class="form-group row">
                    <div class="col-sm-10">
                    {{ Form::number('term_two[]', '', ['class' => 'form-control']) }}
                    </div>
                    </div><br>
                    <div class="form-group row">
                    <div class="col-sm-10">
                    {{ Form::number('term_two[]', '', ['class' => 'form-control']) }}
                    </div>
                    </div><br>
                    <div class="form-group row">
                    <div class="col-sm-10">
                    {{ Form::number('term_two[]', '', ['class' => 'form-control']) }}
                    </div>
                    </div><br>
                    <div class="form-group row">
                    <div class="col-sm-10">
                    {{ Form::number('term_two[]', '', ['class' => 'form-control']) }}
                    </div>
                    </div><br>
            
                    {{-- Form close --}}
                    </div>
                    
                    <div class="col-md-4">
                <h3>Third Term</h3>
                <div class="form-group row">
                    <div class="col-sm-10">
                    {{ Form::number('term_three[]', '', ['class' => 'form-control']) }}
                    </div>
                    </div><br>
                    <div class="form-group row">
                    <div class="col-sm-10">
                    {{ Form::number('term_three[]', '', ['class' => 'form-control']) }}
                    </div>
                    </div><br>
                    <div class="form-group row">
                    <div class="col-sm-10">
                    {{ Form::number('term_three[]', '', ['class' => 'form-control']) }}
                    </div>
                    </div><br>
                    <div class="form-group row">
                    <div class="col-sm-10">
                    {{ Form::number('term_three[]', '', ['class' => 'form-control']) }}
                    </div>
                    </div><br>
                    <div class="form-group row">
                    <div class="col-sm-10">
                    {{ Form::number('term_three[]', '', ['class' => 'form-control']) }}
                    </div>
                    </div><br>
                    <div class="form-group row">
                    <div class="col-sm-10">
                    {{ Form::number('term_three[]', '', ['class' => 'form-control']) }}
                    </div>
                    </div><br>
        
                    {{ Form::submit('submit', ['class' => 'btn btn-primary']) }}
                    {!! Form::close() !!}</div>
                    
            @endif
        </div>
        <!-- /.tab-pane -->
        </div>
        <!-- /.tab-content -->
    </div>

@endsection