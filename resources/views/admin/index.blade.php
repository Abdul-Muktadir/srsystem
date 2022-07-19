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

<div class="table-responsive">
        @if (session('success'))
            <div class="text-success text-center"><h3>{{session('success')}}</h3></div>
        @endif
@if (is_countable($users) && count($users) > 0)
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
        <th scope="col">Gender</th>
        <th scope="col">Subject</th>
        <th scope="col">Admin</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $user) 
      <tr>     
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->phone}}</td>
        <td>{{$user->address}}</td>
        <td>{{$user->gender}}</td>
        <td>{{$user->subject}}</td>
        <td>{{$user->is_admin}}</td>
        <td><a href="/admin/{{$user->id}}/edit" class="btn btn-primary"><span data-feather="edit">Edit</span></a></td>
        <td>
            {!! Form::open(['action' => ['App\Http\Controllers\Admin\AdminController@destroy', $user->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
            {!! Form::close() !!}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @else
  {{ __('No Teacher Found!') }}
  @endif
</div>
@endsection