<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Dashboard Template · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
<link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/dashboard.css')}}" rel="stylesheet">
  </head>
  <body>
    
{{-- navbar --}}
@include('admin.inc.navbar')
{{-- navbar --}}

<div class="container-fluid">
  <div class="row">
    {{-- leftsidebar --}}
    @include('admin.partials.leftsidebar')
    {{-- leftsidebar --}}

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        @yield('content-header')
      
      @yield('body')
      {{-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> --}}

    </main>
  </div>
</div>


    <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
    {{-- <script src="{{ asset('js/feather.min.js')}}" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script> --}}

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
      <script src="{{ asset('js/dashboard.js')}}"></script>
  </body>
</html>
