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
      <script src="{{ asset('js/app.js') }}" defer></script>
      <script src="{{ asset('js/master.js') }}" defer></script>
      <!-- Fonts -->
      <link rel="dns-prefetch" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <link href="{{ asset('css/master.css') }}" rel="stylesheet">
   </head>
   <body>
      <div id="app">
         <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
               <a class="navbar-brand" href="{{ url('/') }}">
               {{ config('app.name', 'SIP') }}
               </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
               <span class="navbar-toggler-icon"></span>
               </button>
                @guest
               <div class="collapse navbar-collapse" id="navbarSupportedContent">

                 
                  <!-- Botones a la Izquierda -->
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ejemplo</a>
                     </li>
                  </ul>
                  <!-- Botones lado derecho -->
                  <ul class="navbar-nav ml-auto">
                     <!-- Authentication Links -->
                     
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                     </li>
                     @else
                     <li>
                           <div class="btn-group">
                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Planificacion
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Datos Informe de Gestion</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Talentos Humanos</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Medicamentos e Insumos</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Infraestructura</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item"  href="#">Módulos</a></div>

                    </div>
                  </li>
                    <li>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Proyectos
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Servicios Administrativos</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Talentos Humanos</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Medicamentos e Insumos</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Infraestructura</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item"  href="#">Crear Proyectos</a>
                        </div>
                    </div>
                </li>

                <div class="btn-group">
                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                        </form>
                    </div>
                </div>
            @endguest
          </ul>
    </div>
</div>
</nav>

<!-- Aqui van los alerts -->
@if (session ('info'))
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="alert alert-success">
        {{  session('info') }}
      </div>
    </div>
  </div>
</div>
@endif
@if (count($errors))
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
          <li>{{$error}}</li>
          @endforeach()
        </ul>
      </div>
    </div>
  </div>
</div><!-- FIN de los alerts -->


@endif
         <main class="py-4">
            @yield('content')
         </main>
      </div>
   </body>
</html>
