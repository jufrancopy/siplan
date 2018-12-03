@extends('layouts.master')
@section('content')
<div class="container">
	<div class="col-md-8 col-md-offset-2">
        <section class="content-header">
            <h1>Áreas - Sectores Funcionales
                <small>Modelo Italiano</small>
            </h1>
            <ol class="breadcrumb ">
                <li class="active">Inicio</li>
                <a href="{{route('areas.create')}}" class="btn btn-info btn-sm ml-auto pull-right">Crear</a>
            </ol>
        </section>
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="table-responsive">
                    <table class="table table-bordered">
    					<thead>
    						<tr>
    							<th scope="col">Sector</th>
          						<th scope="col">Sub-Sector</th>
          						<th scope="col">Area Funcional</th>
                                <th colspan="3">Acciones</th>
        					</tr>
        				</thead>
        				<tbody>
        					@foreach ($areas as $area)
        					<tr>
        						<td>{{ $area->sector}}</td>
                                <td>{{ $area->subsector}}</td>
                                <td>{{ $area->area_funcional}}</td>
        						
        						<td width="10px">
                                    <a href="{{route('areas.edit',$area->id)}}" class="btn btn-sm btn-default">Editar</a>                  
                                </td>
                                <td width="10px">
                                    {!! Form::open(['route'=>['areas.destroy', $area->id],
                                    'method'=>'DELETE']) !!}
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Seguro de Eliminar?')">Eliminar</button>

                                    {!! Form::close() !!}                  
                                </td>
        					</tr>
                        </tbody>
    			@endforeach
                    </table>
                    <div class="panel-footer" style="text-align: center;">
                    {{$areas->render()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection