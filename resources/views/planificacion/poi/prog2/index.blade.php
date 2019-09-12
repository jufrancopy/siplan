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
					<li><a href="{{route('report1')}}">Todos los rubros por año y por deparatamentos</a></br></li>
					<li><a href="{{route('report2')}}">Por departamentos, mes y rubros</a></br></li>
					<li><a href="{{route('report2')}}">Filtrado por Rubros y Departamentos</a></br></li>
				</ul>
					
				</div>
		</div>
	</div>
@endsection