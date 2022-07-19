@extends('layout.app')

@section('content')
        @if (session('success'))
            <div class="text-success text-center">{{session('success')}}</div>
        @endif
@if (auth('student')->check())
<div class='jumbotron text-center'>
<h1>Welcome To {{Auth::guard('student')->user()->name}} Results Page</h1>
<p>{{Auth::guard('student')->user()->email}}</p>
<p>{{Auth::guard('student')->user()->phone}}</p>
<p>{{Auth::guard('student')->user()->address}}</p>
<p>{{Auth::guard('student')->user()->gender}}</p>
</div>

<br><hr><br>
<div class='jumbotron text-center'>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Student Results</h1>
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
      
      <div class="table-responsive">
        
      @if (is_countable($results) && count($results) > 0)
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Subjects</th>
              <th scope="col">First Term</th>
              <th scope="col">Second term</th>
              <th scope="col">Third Term</th>
              <th scope="col">Total</th>
              <th scope="col">Max Marks</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($results as $result) 
            <tr>
                <td>{{$result->subject}}</td>  
                <td>{{$result->term_one}}</td> 
                <td>{{$result->term_two}}</td> 
                <td>{{$result->term_three}}</td> 
                <td>{{$result->term_one + $result->term_two + $result->term_three}}</td> 
                <td><span class="colorchange1">300</span></td>  
            </tr>
            @endforeach
            <tr>
                <th>Total</th>  
                <th>{{$term_one}}</th> 
                <th>{{$term_two}}</th> 
                <th>{{$term_three}}</th> 
                <th>{{$total_results=$term_one+$term_two+$term_three;}}</th> 
                <th><span class="colorchange1">1,800</span></th>  
            </tr>
          </tbody>
        </table>
        {{-- {{$total_results=$term_one+$term_two+$term_three}} --}}
        @if ($total_results <= 900)
            <div class='text-danger'><h1>Failed</h1></div>
        @else
        <div class='text-success'><h1>Passed</h1></div>
        @endif

        @else
        {{ __('Results Is Not Ready Yet!') }}
        @endif
      </div>
      @endif
</div>
      @endsection
      
      {{-- @section('body')
@endsection --}}