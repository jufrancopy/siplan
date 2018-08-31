@extends('layouts.master')
@section('content')
<div class="container">
    <div class="col-md-8 col-md-offset-2">
    <section class="content-header">
        <h1>Modulo de Proyectos
            <small>Beta v1.0</small>
        </h1>
      <ol class="breadcrumb ">
        <li><a href="{{route('publico')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Proyectos</li>
        <a href="{{route('proyectos.create')}}" class="btn btn-info btn-sm ml-auto pull-right">Crear</a>
      </ol>

    </section>
    
    <div class="panel panel-default">

      <div class="panel-heading">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Nombre</th>
                  <th scope="col">Tipo</th>
                  <th scope="col">Costo</th>
                            <th scope="colspan=3">Acciones</th>
              </tr>
            </thead>
           <tbody>
              </tbody>
         
          </table>
      </div>
    </div>
  </div>
</div>
@endsection