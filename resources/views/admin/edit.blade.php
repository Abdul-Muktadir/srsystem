@extends('admin.layouts.app')

@section('content-header')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Dashboard</h1>
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
<div class="card-header"><h3>{{ __('Update') }} {{$user->name}}</h3></div>
    <div class="card-body">
        <div class="tab-content">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
        <!-- /.tab-pane -->
        @if (session('error'))
            <div class="text-danger text-center">{{session('error')}}</div>
        @endif
            {!! Form::open(['action' => ['App\Http\Controllers\Admin\AdminController@update', $user->id], 'method' => 'POST']) !!}
            <div class="form-group row">
            <label for="inputExperience" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
            {{ Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Name']) }}
            </div>
            </div><br>
            <div class="form-group row">
            <label for="inputExperience" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
            {{ Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' => 'Email']) }}
            </div>
            </div><br>
            {{-- <div class="form-group row">
            <label for="inputExperience" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
            {{ Form::text('password', '', ['class' => 'form-control', 'placeholder' => 'Password']) }}
            </div>
            </div><br> --}}
            <div class="form-group row">
            <label for="inputExperience" class="col-sm-2 col-form-label">Phone</label>
            <div class="col-sm-10">
            {{ Form::text('phone', $user->phone, ['class' => 'form-control', 'placeholder' => 'Phone']) }}
            </div>
            </div><br>
            <div class="form-group row">
            <label for="inputExperience" class="col-sm-2 col-form-label">Address</label>
            <div class="col-sm-10">
            {{ Form::text('address', $user->address, ['class' => 'form-control', 'placeholder' => 'Address']) }}
            </div>
            </div><br>
            <div class="form-group row">
            <label for="inputExperience" class="col-sm-2 col-form-label">Gender</label>
            <div class="col-sm-10">
            Male
            {{ Form::radio('gender', 'Male') }}
            Female
            {{ Form::radio('gender', 'Female') }}
            </div>
            </div><br>
            <div class="form-group row">
            <label for="inputExperience" class="col-sm-2 col-form-label">Admin / Teacher</label>
            <div class="col-sm-10">
            {{ Form::select('is_admin', 
            [$user->is_admin=>$user->is_admin,
            '1' => 'Admin',
             '0' => 'Teacher']) }}
            </div>
            </div><br>
            <div class="form-group row">
            <label for="inputExperience" class="col-sm-2 col-form-label">Subject</label>
            <div class="col-sm-10">
            {{ Form::select('subject', 
            [$user->subject=>$user->subject,
            'English' => 'English',
             'Mathematics' => 'Mathematics',
             'Science' => 'Science',
             'Social studies' => 'Social studies',
             'I.C.T' => 'I.C.T']) }}
            </div>
            </div><br>
            {{ Form::hidden('_method', 'PUT') }}
            {{ Form::submit('submit', ['class' => 'btn btn-primary']) }}
            {!! Form::close() !!}
            </div>
            
            <div class="col-md-2"></div>
        </div>
        <!-- /.tab-pane -->
        </div>
        <!-- /.tab-content -->
    </div>

@endsection