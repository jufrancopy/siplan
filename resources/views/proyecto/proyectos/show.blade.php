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
        <li class="active"><a href="{{route('med_inms.index')}}">Medicamentos e Insumos</a></li>
        <li class="active">Detalles</li>
        
      </ol>

    </section>
		
		<div class="panel panel-default">
			<div class="panel-heading">
			Detalles
			<div class="panel-body">
				<p><strong>Item:</strong>{{$med_inm->item}}</p>
				<p><strong>Costo:</strong>{{$med_inm->costo}}</p>
				<p><strong>Tipo:</strong>
				 @switch($med_inm->tipo)
                                @case('insumo')
                                    Insumo</p>
                                    @break
                                @case('medicamento')
                                    Medicamento</p>
                                    @break
                                @default
                                    Sin tipo</p>
                            @endswitch

			</div>

		</div>
	</div>
</div>
@endsection
