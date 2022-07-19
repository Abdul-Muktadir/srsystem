<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        {{-- <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script> --}}
        <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

        <title>{{config('app.name', 'SRSYSTEM')}}</title>

    </head>
    <body class="antialiased">
        {{-- <div class="container"> --}}
            @include('inc.navbar')
            {{-- @include('inc.messages') --}}
        <div class="container">
            <div class="card">
                @yield('content')
            </div>
        </div>
    </body>
</html>