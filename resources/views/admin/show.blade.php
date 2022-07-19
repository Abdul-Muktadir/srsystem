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
    <div class="card-body">
        <div class="tab-content">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
        <!-- /.tab-pane -->
            <!-- Profile Image -->
            @if(Auth::check())
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                  <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle"
                         src=""
                         alt="User profile picture">
                  </div>
  
                  <h3 class="profile-username text-center">{{Auth::user()->name}}</h3>
  
                  <p class="text-muted text-center">{{Auth::user()->email}}</p>
  
                  <p class="text-muted text-center">{{Auth::user()->phone}}</p>
  
                  <h3 class="profile-username text-center">{{Auth::user()->address}}</h3>
  
                  <p class="text-muted text-center">{{Auth::user()->gender}}</p>
  
                  <p class="text-muted text-center">{{Auth::user()->subject}}</p>
  
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->  
            @endif
            </div>
            
            <div class="col-md-2"></div>
        </div> 
        <!-- /.tab-pane -->
        </div>
        <!-- /.tab-content -->
    </div>

@endsection