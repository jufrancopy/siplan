@extends('layouts.master')
@section('content')
<div class="container">
	<div class="col-md-8 col-md-offset-2">
		
		<div class="panel panel-default">
			<div class="panel-heading">
			Cargar Servicios	
			</div>
			<div class="panel-body">
				{!!	Form::open(['route'=>'tipo_evaluaciones.store'])	!!}

					@include('planificacion.evaluaciones.tipo_evaluaciones.partials.form')

				{!!	Form::close()	!!}
			</div>
		</div>
	</div>
</div>
@endsection
