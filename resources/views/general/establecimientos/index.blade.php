@extends('layouts.master') 
@section('content')
<div class="container">
    <div class="col-md-8 col-md-offset-2">
        <section class="content-header">
            <h1>Establecimientos de Salud del IPS</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="{{route('establecimientos.index')}}">
                        <i class="fa fa-dashboard"></i> Inicio
                    </a>
                </li>
                <li class="active">Establecimientos</li>
                <a href="{{route('establecimientos.create')}}" class="btn btn-info btn-sm ml-auto pull-right">Agregar</a>
            </ol>
        </section>
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Departamento</th>
                                <th scope="col">Ciudad</th>
                                <th scope="col">Nivel</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Año</th>
                                <th colspan="3">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($establecimientos as $establecimiento)
                            <tr>
                                <td>{{ $establecimiento->departamento->nombre}}</td>
                                <td>{{ $establecimiento->ciudad->nombre}}</td>
                                    @switch($establecimiento->nivel->nombre) 
                                      @case('Hospital')
                                        <td><span class="icon-h"></span></td>
                                          @break 
                                      @case('Hospital Regional')
                                        <td><span class="icon-hr"></span></td>
                                          @break 
                                      @case('Unidad Sanitaria')
                                        <td><span class="icon-us"></span></td>
                                          @break 
                                      @case('Clinica Periferica')
                                        <td><span class="icon-cp"></span></td>
                                          @break 
                                      @case('Puesto Sanitario')
                                        <td><span class="icon-ps"></span></td>
                                          @break 
                                      @case('Centro Especializado')
                                        <td><span class="icon-cn"></span></td>
                                          @break 
                                      @default
                                        <td>Sin Nivel</td>
                                    @endswitch
                                <td>{{ $establecimiento->tipo}}</td>
                                <td>{{ $establecimiento->cantidad}}</td>
                                <td>{{ $establecimiento->anho->anho}}</td>
                                <td width="10px">
                                    <a href="{{route('establecimientos.show', $establecimiento->id)}}" class="btn btn-sm btn-default">Ver</a>
                                </td>
                                <td width="10px">
                                    <a href="{{route('establecimientos.edit',$establecimiento->id)}}" class="btn btn-sm btn-default">Editar</a>
                                </td>
                                <td width="10px">
                                    {!! Form::open(['route'=>['establecimientos.destroy', $establecimiento->id], 'method'=>'DELETE']) !!}
                                    <button class="btn btn-sm btn-danger">Eliminar</button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                    <div class="panel-footer" style="text-align: center;">
                        {{$establecimientos->render()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection