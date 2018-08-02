<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <!-- JavaScript -->
      <script src="{{ asset('js/app.js') }}" defer></script>
      <!-- Fonts -->
      <link rel="dns-prefetch" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
      <!-- Styles -->
      <link href="{{ asset('css/master.css') }}" rel="stylesheet">
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
   </head>
   <body>
      <nav class="navbar navbar-inverse">
         <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <!-- Logo de la web o nombre -->
               <a class="navbar-brand" href="{{ url('/') }}">
               {{ config('app.name', 'SIP') }}
               </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav">
                  <!-- Authentication Links -->
                  @guest
                  <li class="nav-item">
                     <a class="nav-link" href="{{ route('login') }}">{{ __('Entrar') }}</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                  </li>
                  @else
                  <!-- Lista Menu del lado derecho -->
                  <!-- Dtpto de Planificacion lista -->
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Planificacion <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                        <li><a href="#">Datos para Informes</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{route('poi')}}">Evaluacion POI</a></li>
                        <li role="separator" class="divider"></li>
                     </ul>
                  </li>
                  <!-- FIN ----Dtpto de Planificacion lista -->
                  <!-- Dpto de Proyectos Lista -->
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Proyectos <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                        <li><a href="{{route('servs_adms.index')}}">Servicios</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{route('infraestructuras.index')}}">Infraestructura</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{route('eqs_tecns.index')}}">Tecnologia</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Medicamentos e Insumos</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Talentos Humanos</a></li>
                        <li role="separator" class="divider"></li>
                     </ul>
                  </li>
                  <!-- FIN ----Dtpto de Proyectos lista -->
                  <!--Globales -->
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Globales <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                        <li><a href="{{route('departamentos.index')}}">Departamentos</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{route('establecimientos.index')}}">Establecimientos de Salud</a></li>
                     </ul>
                  </li>
                  <!-- FIN ----Dtpto de Proyectos lista -->
               </ul>
               <!-- FIN ----Menu del lado derecho -->
               <!-- Boton Buscador -->
               <form class="navbar-form navbar-left">
                  <div class="form-group">
                     <input type="text" class="form-control" placeholder="escudriñe">
                  </div>
                  <button type="submit" class="btn btn-success ">Buscar</button>
               </form>
               <!-- FIN ----Boton Buscador -->
               <!-- Menu lista lado Izquierdo -->
               <ul class="nav navbar-nav navbar-right">
                  <li><a href="#">Enlace</a></li>
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                        <li><a href="#">Editar Perfil</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Puntuacion</a></li>
                        <li>
                           <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                           </form>
                        </li>
                     </ul>
                  </li>
                  @endguest
               </ul>
               <!-- FIN ----Menu Lista lado Izquierdo -->
            </div>
            <!-- /.navbar-collapse -->
         </div>
         <!-- /.container-fluid -->
      </nav>
      <div class="container">
         
            @yield('content')
         
      </div>
   </body>
</html>