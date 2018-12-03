@extends('layouts.master')
@section('content')
<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<h1>Principal</h1>
		<div class="panel panel-default">
			<div class="panel-heading">
			Detalles del Establecimiento por Ciudad	
			</div>
			<div class="panel-body">
				<p>
					<strong>Departamento:</strong>
						{{$establecimientos->departamento->nombre}}
				</p>
				<p>
					<strong>Ciudad:</strong>
						{{$establecimientos->ciudad->nombre}}
				</p>
				<p>
					<strong>Nivel de Atención:</strong>
					{{$establecimientos->nivel->nombre}}
				</p>
				<p>
					<strong>Tipo:</strong>
					{{$establecimientos->tipo}}
				</p>
				<p>
					<strong>Cantidad de Establecimiento:</strong>
					{{$establecimientos->cantidad}}
				</p>
				
				<p>
					<strong>Cantidad de Camas:</strong>
					{{$establecimientos->cantidad}}
				</p>

				<p>
					<strong>Según informe de:</strong>
					{{$establecimientos->referencia}}
				</p>

				<p>
					<strong>Correspondiente al año:</strong>
					{{$establecimientos->anho->anho}}
				</p>

			</div>
		</div>
	</div>
</div>
@endsection




