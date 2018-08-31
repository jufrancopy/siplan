@extends('layouts.master')
@section('content')
<div class="container">
	<div class="col-md-8 col-md-offset-2">
        <section class="content-header">
            <h1>Equipos Tecnológicos
                <small>Beta v1.0</small>
            </h1>
            <ol class="breadcrumb ">
                <li><a href="{{route('publico')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
                <li class="active">Equipos Tecnológicos</li>
                <a href="{{route('eqs_tecns.create')}}" class="btn btn-info btn-sm ml-auto pull-right">Crear</a>
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
    					@foreach ($equipostecnologicos as $equipotecnologico)
    					<tr>
    						<td>{{ $equipotecnologico->item}}</td>
    						   @switch($equipotecnologico->tipo)
                                @case('informatico')
                                    <td>Informático</td>
                                    @break
                                @case('biomedico')
                                    <td>Biomédico</td>
                                    @break
                                @default
                                    <td>Sin tipo</td>
                            @endswitch
                            <td>{{ number_format($equipotecnologico->costo, 3)}}</td> 
    						<td width="10px">
                                <a href="{{route('eqs_tecns.show', $equipotecnologico->id)}}" class="btn btn-sm btn-default">Ver</a>
                            </td>
                            <td width="10px">
                                <a href="{{route('eqs_tecns.edit',$equipotecnologico->id)}}" class="btn btn-sm btn-default">Editar</a>                  
                            </td>
                            <td width="10px">
                                {!! Form::open(['route'=>['eqs_tecns.destroy', $equipotecnologico->id],
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