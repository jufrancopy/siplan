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
                <li class="active"><a href="{{route('infraestructuras.index')}}">Infraestructura</a></li>
                <a href="{{route('infraestructuras.create')}}" class="btn btn-info btn-sm ml-auto pull-right">Crear</a>

                 
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
    					@foreach ($infraestructuras as $infraestructura)
    					<tr>
    						<td>{{ $infraestructura->item}}</td>
                            @switch($infraestructura->tipo)
                                @case('nueva')
                                    <td>Nueva</td>
                                    @break

                                @case('readecuacion')
                                    <td>Readecuación</td>
                                    @break
                                @case('read_ampl')
                                    <td>Readecuación y Ampliación</td>
                                    @break                                    

                                @default
                                    <td>Sin tipo</td>
                            @endswitch
                            <td>{{  number_format($infraestructura->costo, 3)}}</td>
    						<td width="10px">
                                <a href="{{route('infraestructuras.show', $infraestructura->id)}}" class="btn btn-sm btn-default">Ver</a>
                            </td>
                            <td width="10px">
                                <a href="{{route('infraestructuras.edit',$infraestructura->id)}}" class="btn btn-sm btn-default">Editar</a>                  
                            </td>
                            <td width="10px">
                                {!! Form::open(['route'=>['infraestructuras.destroy', $infraestructura->id],
                                'method'=>'DELETE']) !!}
                                <button class="btn btn-sm btn-danger">Eliminar</button>

                                {!! Form::close() !!}                  
                            </td>
    					</tr>

    				</tbody>
    			@endforeach
    			</table>
                <hr>
                <p>
                    <a href="{{ route('infraestructura.pdf') }}" class="btn btn-sm btn-primary">
                        Descargar productos en PDF
                    </a>
                </p>
			</div>
		</div>
	</div>
</div>
@endsection