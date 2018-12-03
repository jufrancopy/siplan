@extends('layouts.master')
@section('content')
<div class="container">
    <div class="col-md-8 col-md-offset-2">
        <section class="content-header">
            <h1>Tipos de Evaluaciones
                
            </h1>
          <ol class="breadcrumb ">
            <li><a href="{{route('publico')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Tipos de Evaluacione</li>
            <a href="{{route('tipo_evaluaciones.create')}}" class="btn btn-info btn-sm ml-auto pull-right">Crear</a>
          </ol>
        </section>
    <div class="panel panel-default">
            <div class="panel-heading">
                <div class="table-responsive">
                    <table class="table table-bordered">
    					<thead>
    						<tr>
    							<th scope="col">ID</th>
                                <th scope="col">Nombre</th>
          						
          						<th colspan="3">Acciones</th>
        					</tr>
        				</thead>
        				<tbody>
        					@foreach ($tipoevaluaciones as $tipoevaluacion)
        					
                             <td width="10px">{{$tipoevaluacion->id}}</td>
        					 <td width="10px">{{$tipoevaluacion->nombre}}</td>
        					 
        						<!--<td width="10px">
                                    <a href="{{route('tipo_evaluaciones.show', $tipoevaluacion->id)}}" class="btn btn-sm btn-default">Ver</a>
                                </td>-->
                                <td width="10px">
                                    <a href="{{route('tipo_evaluaciones.edit',$tipoevaluacion->id)}}" class="btn btn-sm btn-default">Editar</a>                  
                                </td>
                                <td width="10px">
                                    {!! Form::open(['route'=>['tipo_evaluaciones.destroy', $tipoevaluacion->id],
                                    'method'=>'DELETE']) !!}
                                    <button class="btn btn-sm btn-danger">Eliminar</button>

                                    {!! Form::close() !!}                  
                                </td>
        					</tr>
                        </tbody>
        			@endforeach
        			</table>
                    <div class="panel-footer" style="text-align: center;">
                    {{$tipoevaluaciones->render()}}
                    </div>
    			</div>
    		</div>
    	</div>
    </div>
</div>
@endsection