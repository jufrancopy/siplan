<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

      <!-- Styles -->
      
      <link href="{{ asset('css/master.css') }}" rel="stylesheet">
      
      <!-- CSS Fontawesome -->
      <link href="{{ asset('css/all.css') }}" rel="stylesheet">

      <!-- CSS Select2 -->
      <link href="{{ asset('css/select2.css') }}" rel="stylesheet">

      <!-- CSS Icomoon-->
      <link href="{{ asset('icomoon/style.css') }}" rel="stylesheet"> <!-- CSS Datatables -->
      <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet">
      <link href="{{ asset('css/buttons.dataTables.min.css') }}" rel="stylesheet">

      <!-- CSS Booststrap   -->
      <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
      
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
                        <li><a href="{{route('med_inms.index')}}">Medicamentos e Insumos</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{route('tls_hs.index')}}">Talentos Humanos</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{route('proyectos.index')}}"  class="btn-info">Crear Proyectos</a></li>
                     </ul>
                  </li>
                  <!-- FIN ----Dtpto de Proyectos lista -->
                  <!--Globales -->
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Globales <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                        <li><a href="{{route('listadoDptocreate')}}">Departamentos</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{route('establecimientos.index')}}">Establecimientos de Salud</a></li>
                        <li><a href="{{route('pdf')}}">FPDF</a></li>
                        <li><a href="{{route('prodview')}}">Selec de Prueba</a></li>
                        
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
         <script src="{{ asset('js/jquery.js')}}"></script>
         <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
         <script src="{{ asset('js/master.js')}}"></script>
         <script src="{{ asset('js/select2.js') }}"></script>         
         <script src="{{ asset('js/datatables/jquery.dataTables.min.js')}}" defer></script>      
         <script src="{{ asset('js/datatables/dataTables.buttons.min.js')}}" defer></script>      
         <script src="{{ asset('js/datatables/buttons.flash.min.js')}}" defer></script>
         <script src="{{ asset('js/datatables/jzip.min.js')}}" defer></script>      
         <script src="{{ asset('js/datatables/pdfmake.min.js')}}" defer></script>      
         <script src="{{ asset('js/datatables/vfs_fonts.js')}}" defer></script>      
         <script src="{{ asset('js/datatables/buttons.html5.min.js')}}" defer></script>
         <script src="{{ asset('js/datatables/buttons.print.min.js')}}" defer></script>
         <script>
            $(document).ready(function() {
            $('.js-example-responsive').select2();
            });
         </script>

            @yield('content')
            
      </div>
   </body>
</html>
