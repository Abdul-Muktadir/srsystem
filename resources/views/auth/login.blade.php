@extends('layouts.app')

@section('content')
                <div class="card-header">{{ __('Admin Login') }}</div>

                <div class="card-body">
                  <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                  @if (session('error'))
                      <div class="text-danger text-center">{{session('error')}}</div>
                  @endif
                  @if (session('success'))
                      <div class="text-success text-center">{{session('success')}}</div>
                  @endif
                    <form action="{{route('postLogin')}}" method="post">
                        @csrf
                        <div class="input-group mb-3">
                          <input name="email" type="email" class="form-control" placeholder="Email">
                          <div class="input-group-append">
                            <div class="input-group-text">
                              <span class="fas fa-envelope"></span>
                            </div>
                          </div>
                        </div>
                        @error('email')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                        <div class="input-group mb-3">
                          <input name="password" type="password" class="form-control" placeholder="Password">
                          <div class="input-group-append">
                            <div class="input-group-text">
                              <span class="fas fa-lock"></span>
                            </div>
                          </div>
                        </div>
                        @error('password')
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
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                          </div>
                          <!-- /.col -->
                        </div>
                      </form>

                    </div>
                    <div class="col-md-4"></div>
                  </div>
                </div>
            </div>
@endsection
