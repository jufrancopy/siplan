@extends('layouts.master')
@section('content')
<div class="container">
    <div class="col-md-8 col-md-offset-2">
    <section class="content-header">
        <h1>Medicamentos e Insumos
            <small>Beta v1.0</small>
        </h1>
      <ol class="breadcrumb ">
        <li><a href="{{route('publico')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Medicamentos e Insumos</li>
        <a href="{{route('med_inms.create')}}" class="btn btn-info btn-sm ml-auto pull-right">Crear</a>
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
    					@foreach ($med_inms as $med_inm)
    					<tr>
    						<td>{{ $med_inm->item}}</td>
    						<td>{{ $med_inm->tipo}}</td>
                            <td>{{  number_format($med_inm->costo, 3)}}</td>
    						<td width="10px">
                                <a href="{{route('med_inms.show', $med_inm->id)}}" class="btn btn-sm btn-default">Ver</a>
                            </td>
                            <td width="10px">
                                <a href="{{route('med_inms.edit',$med_inm->id)}}" class="btn btn-sm btn-default">Editar</a>                  
                            </td>
                            <td width="10px">
                                {!! Form::open(['route'=>['med_inms.destroy', $med_inm->id],
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