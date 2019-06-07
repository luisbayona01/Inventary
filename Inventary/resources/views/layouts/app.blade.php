<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
   <script src="{{ asset('js/angular.min.js') }}"></script>
   <script src="{{ asset('js/index.js') }}"></script>
  
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
     <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>
<body ng-app="myApp" ng-controller="myCtrl">
    <div id="app">
        



<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Inventario gestion</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{url('/')}}">reporte</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/provedores')}}">Proeveedores</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/clientes')}}">Clientes</a>
      </li>
       
    </ul>
  </div> 
</nav>
  <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
