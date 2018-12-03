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
                <li class="active"><a href="{{route('tls_hs.index')}}">Talentos Humanos</a></li>
                <li class="active">Ver</li>
                
            </ol>
        </section>
		<div class="panel panel-default">
			<div class="panel-heading">
			Detalles del Talento Humano	
			</div>
			<div class="panel-body">
				<p><strong>Item: </strong>
					{{$tl_h->item}}</p>
				<p><strong>Tipo: </strong>
				 @switch($tl_h->tipo)
                                    @case('permanente')
                                        Permanente
                                        @break

                                    @case('contratado')
                                        Contratado
                                        @break
                                    @default
                                        Sin tipo
                                @endswitch
				</p>
				<p><strong>Costo: </strong>
					{{$tl_h->costo}}</p>
			</div>
		</div>
	</div>
</div>
@endsection
