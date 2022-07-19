@extends('layouts.app')

@section('content')
                <div class="card-header">{{ __('Student Login') }}</div>

                <div class="card-body">
                  <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                    <form action="{{route('postStudentLogin')}}" method="post">
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
                            <button type="submit" class="btn btn-primary btn-block">Check Results</button>
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
