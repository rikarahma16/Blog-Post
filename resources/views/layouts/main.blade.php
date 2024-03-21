<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" >

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- My Style --}}
    <link rel="stylesheet" href="/css/style.css">

    <title>WPU Blog | {{ $title }} </title>
  </head>
  <body>

  @include('partials.navbar')

<div class="container mt-4">
    @yield('container')
</div>
   <script src="{{asset('js/bootstrap.js')}}" ></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>    
    
  </body>
</html>