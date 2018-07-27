@extends('layouts.master')
@section('content')
<div class="container">
	<div class="col-md-8 col-md-offset-2">
		
		
		<div class="panel panel-default">
			<div class="panel-heading">
			Cargar Servicios	
			</div>
			<div class="panel-body">
				{!!	Form::open(['route'=>'eqs_tecns.store'])	!!}

					@include('proyecto.eqs_tecns.partials.form')

				{!!	Form::close()	!!}
			</div>
		</div>
	</div>
</div>
@endsection
