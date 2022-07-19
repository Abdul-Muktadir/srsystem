@extends('admin.layouts.app')

@section('content-header')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Students Table</h1>
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

<div class="table-responsive">
        @if (session('success'))
            <div class="text-success text-center">{{session('success')}}</div>
        @endif
@if (is_countable($students) && count($students) > 0)
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Student Id</th>
        <th scope="col">Email</th>
        <th scope="col">Grade</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
        <th scope="col">Gender</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($students as $student) 
      <tr>     
        <td>{{$student->name}}</td>
        <td>{{$student->student_id}}</td>
        <td>{{$student->email}}</td>
        <td>{{$student->grade}}</td>
        <td>{{$student->phone}}</td>
        <td>{{$student->address}}</td>
        <td>{{$student->gender}}</td>
        <td><a href="/adminstudent/{{$student->id}}/edit" class="btn btn-primary"><span data-feather="edit">Edit</span></a></td>
        <td>
            {!! Form::open(['action' => ['App\Http\Controllers\Admin\StudentController@destroy', $student->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
            {!! Form::close() !!}
        </td>
        <td><a href="/adminstudentresults/{{$student->id}}/edit" class="btn btn-success"><span data-feather="plus"></span>Add Result</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @else
  {{ __('No Teacher Found!') }}
  @endif
</div>
@endsection