@extends('layouts.master')
@section('content')
<div class="container">
   <div class="col-md-8 col-md-offset-2">
      <section class="content-header">
         <h1>Servicios Administrativos
            <small>Beta v1.0</small>
         </h1>
         <ol class="breadcrumb ">
            <li><a href="{{route('publico')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active"><a href="{{route('servs_adms.index')}}">Servicios Administrativos</a></li>
            <a href="{{route('servs_adms.create')}}" class="btn btn-info btn-sm ml-auto pull-right">Crear</a>
         </ol>
      </section>
      <div class="panel panel-default">
         <div class="panel-heading">
            <table class="table table-hover">
               <thead>
                  <tr>
                     <th scope="col">Item</th>
                     <th scope="col">Tipo</th>
                     <th scope="col">Costo</th>
                     <th scope="colspan=3">Acciones</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($serviciosadministrativos as $servicioadministrativo)
                  <tr>
                     <td>{{ $servicioadministrativo->item}}</td>
                     <td>{{ $servicioadministrativo->tipo}}</td>
                     <td>{{  number_format($servicioadministrativo->costo, 3)}}</td>
                     <td width="10px">
                        <a href="{{route('servs_adms.show', $servicioadministrativo->id)}}" class="btn btn-sm btn-default">Ver</a>
                     </td>
                     <td width="10px">
                        <a href="{{route('servs_adms.edit',$servicioadministrativo->id)}}" class="btn btn-sm btn-default">Editar</a>                  
                     </td>
                     <td width="10px">
                        {!! Form::open(['route'=>['servs_adms.destroy', $servicioadministrativo->id],
                        'method'=>'DELETE']) !!}
                        <button class="btn btn-sm btn-danger">Eliminar</button>
                        {!! Form::close() !!}                  
                     </td>
                  </tr>
               </tbody>
               @endforeach
            </table>
         </div>
      </div>
   </div>
</div>
@endsection