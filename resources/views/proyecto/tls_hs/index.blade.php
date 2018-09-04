@extends('layouts.master')
@section('content')
<div class="container">
	<div class="col-md-8 col-md-offset-2">
        <section class="content-header">
            <h1>Talentos Humanos
                <small>Beta v1.0</small>
            </h1>
            <ol class="breadcrumb ">
                <li><a href="{{route('publico')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
                <li class="active">Talentos Humanos</li>
                <a href="{{route('tls_hs.create')}}" class="btn btn-info btn-sm ml-auto pull-right">Crear</a>
            </ol>
        </section>
    
        <div class="panel panel-default">
         <div class="panel-heading">
            <div class="table-responsive">
               <table class="table table-bordered">
					<thead>
						<tr>
							<th scope="col">Item</th>
      						<th scope="col">Tipo</th>
      						<th scope="col">Costo</th>
                            <th colspan="3">Acciones</th>
    					</tr>
    				</thead>
    				<tbody>
    					@foreach ($tls_hs as $tl_h)
    					<tr>
    						<td>{{ $tl_h->item}}</td>
    						   @switch($tl_h->tipo)
                                @case('permanente')
                                    <td>Permanente</td>
                                    @break
                                @case('contratado')
                                    <td>Contratado</td>
                                    @break
                                @default
                                    <td>Sin tipo</td>
                            @endswitch
                            <td>{{ number_format($tl_h->costo, 3)}}</td> 
    						<td width="10px">
                                <a href="{{route('tls_hs.show', $tl_h->id)}}" class="btn btn-sm btn-default">Ver</a>
                            </td>
                            <td width="10px">
                                <a href="{{route('tls_hs.edit',$tl_h->id)}}" class="btn btn-sm btn-default">Editar</a>                  
                            </td>
                            <td width="10px">
                                {!! Form::open(['route'=>['tls_hs.destroy', $tl_h->id],
                                'method'=>'DELETE']) !!}
                                <button class="btn btn-sm btn-danger">Eliminar</button>

                                {!! Form::close() !!}                  
                            </td>
    					</tr>
                    </tbody>
    			     @endforeach
                </table>
                <div class="panel-footer" style="text-align: center;">
                    {{$tls_hs->render()}}
                </div>
            </div>
		</div>
	</div>
</div>
@endsection