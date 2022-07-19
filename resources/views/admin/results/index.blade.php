@extends('admin.layouts.app')

@section('content-header')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Students Results Table</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <form action="{{route('search')}}" method="get">
        <div class='form-group'>
        <label for="Enter Student Id"></label>
        <input type="text" name="query" placeholder="Search Here...">
        <button type="submit" class="btn btn-primary">Search</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

@section('body')
@if (isset($results))
<div class="table-responsive">
        @if (session('success'))
            <div class="text-success text-center"><h3>{{session('success')}}</h3></div>
        @endif
  @if (is_countable($results) && count($results) > 0)
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">Subject</th>
          <th scope="col">First Term</th>
          <th scope="col">Second Term</th>
          <th scope="col">Third Term</th>
          <th scope="col">Student Id</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($results as $result) 
        <tr>     
          <td>{{$result->subject}}</td>
          <td>{{$result->term_one}}</td>
          <td>{{$result->term_two}}</td>
          <td>{{$result->term_three}}</td>
          <td>{{$result->student_id}}</td>
          <td><a href="/adminresultsedit/{{$result->id}}/edit" class="btn btn-primary"><span data-feather="edit">Edit</span></a></td>
          <td>
              {!! Form::open(['action' => ['App\Http\Controllers\Admin\AdminStudentResultsController@destroy', $result->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                  {{ Form::hidden('_method', 'DELETE') }}
                  {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
              {!! Form::close() !!}
          </td>
          {{-- <td><a href="/adminstudent/{{$result->id}}/edit" class="btn btn-success"><span data-feather="plus"></span>Add Result</a></td> --}}
        </tr>
        @endforeach
      </tbody>
    </table>
    <br>
    <div class="pagination"> 
      <div class="text-center">{{ $results->links() }} 
      </div>
    </div>
    @else
    {{ __('No Teacher Found!') }}
    @endif
  </div>
@endif

@endsection