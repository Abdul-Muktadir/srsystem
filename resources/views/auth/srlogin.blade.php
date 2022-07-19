@extends('admin.layouts.app')

@section('content-header')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Verify</h1>
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
    <div class="card-header"><h3>{{ __('Verify Student First') }}</h3></div>

    <div class="card-body">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4">
        <form action="{{route('postSRLogin')}}" method="post">
            @csrf
            <div class="input-group mb-3">
                <input name="student_id" type="text" class="form-control" placeholder="Student Id">
                <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
                </div>
            </div>
            @error('student_id')
                <div class="text-danger">{{$message}}</div>
            @enderror
            <div class="input-group mb-3">
                <input name="grade" type="text" class="form-control" placeholder="Grade">
                <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
                </div>
            </div>
            @error('grade')
                <div class="text-danger">{{$message}}</div>
            @enderror
            <div class="input-group mb-3">
                <input name="password" value="password" type="hidden" class="form-control" placeholder="Grade">
                <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
                </div>
            </div>
            @error('grade')
                <div class="text-danger">{{$message}}</div>
            @enderror
            <div class="row">
                <div class="col-8">
                <div class="icheck-primary">
                    <input name="remember" type="checkbox" id="remember">
                    <label for="remember">
                    Remember Me
                    </label>
                </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Verify</button>
                </div>
                <!-- /.col -->
            </div>
            </form>
        </div>
        <div class="col-md-4"></div>
      </div>

        {{-- {!! Form::open(['method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group">
                {{ Form::label('name', 'Name') }}
                {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name']) }}
            </div>
            <div class="form-group">
                {{ Form::label('address', 'Address') }}
                {{ Form::text('address', '', ['class' => 'form-control', 'placeholder' => 'Address']) }}
            </div>
            <div class="form-group">
                {{ Form::label('price', 'Price') }}
                {{ Form::text('price', '', ['class' => 'form-control', 'placeholder' => 'Price']) }}
            </div>
            <div class="form-group">
                {{ Form::file('property_image') }}
            </div>
                {{ Form::hidden('_method', 'PUT') }}
                {{ Form::submit('submit', ['class' => 'btn btn-primary']) }}
        {!! Form::close() !!} --}}
    </div>
</div>
@endsection
