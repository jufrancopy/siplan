@extends('layouts.master')
@section('content')
<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				Seleccione Tipo de Reporte
			</div>
				<div class="panel-body">
					
				<ul>
					<li><a href="{{route('report1')}}">Rubros Generales por Mes</a></br></li>
					<li><a href="{{route('report2')}}">Generales por Rubros</a></br></li>
				</ul>
					
				</div>
		</div>
	</div>
@endsection