@extends('admin.layouts.app')

@section('content-header')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Edit Results</h1>
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
            {{-- @if (Auth::guard('student')->check()) --}}
                {{-- <p>{{Auth::guard('student')->user()->id}}</p> --}}
                
            <div class="col-md-4">
              {!! Form::open(['action' => ['App\Http\Controllers\Admin\AdminResultsEditController@update', $results->id], 'method' => 'POST']) !!}
              <div class="form-group row">
              <label for="inputExperience" class="col-sm-2 col-form-label">Subject</label>
              <div class="col-sm-10">
              {{ Form::text('subject', $results->subject, ['class' => 'form-control', 'placeholder' => 'Subject']) }}
              </div>
              </div><br>
              <div class="form-group row">
              <label for="inputExperience" class="col-sm-2 col-form-label">Term One</label>
              <div class="col-sm-10">
              {{ Form::text('term_one', $results->term_one, ['class' => 'form-control', 'placeholder' => 'Term One']) }}
              </div>
              </div><br>
              <div class="form-group row">
              <label for="inputExperience" class="col-sm-2 col-form-label">Term Two</label>
              <div class="col-sm-10">
              {{ Form::text('term_two', $results->term_two, ['class' => 'form-control', 'placeholder' => 'Term Two']) }}
              </div>
              </div><br>
              <div class="form-group row">
              <label for="inputExperience" class="col-sm-2 col-form-label">Term Three</label>
              <div class="col-sm-10">
              {{ Form::text('term_three', $results->term_three, ['class' => 'form-control', 'placeholder' => 'Term Three']) }}
              </div>
              </div><br>
      
              {{ Form::hidden('_method', 'PUT') }}
              {{ Form::submit('submit', ['class' => 'btn btn-primary']) }}
              {!! Form::close() !!}
            </div>
            {{-- @endif --}}
        </div>
        <!-- /.tab-pane -->
        </div>
        <!-- /.tab-content -->
    </div>

@endsection