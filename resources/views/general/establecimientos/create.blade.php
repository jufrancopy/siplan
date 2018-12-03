@extends('layouts.master')
@section('content')
<div class="container">
	<div class="col-md-8 col-md-offset-2">
		
		<div class="panel panel-default">
			<div class="panel-heading">
			Cargar Nuevo Establecimiento	
			</div>
			<div class="panel-body">
				{!!	Form::open(['route'=>'establecimientos.store'])	!!}

					@include('general.establecimientos.partials.form')

				{!!	Form::close()	!!}
			</div>
		</div>
	</div>
</div>
@endsection
