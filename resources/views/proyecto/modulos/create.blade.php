@extends('layouts.master')
@section('content')
<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<section class="content-header">
        <h1>Asginar Recursos a Módulo
        </h1>
      <ol class="breadcrumb ">
        
        <li class="active"><a href="{{route('modulos.index')}}">Módulos</a></li>
        <li class="active">Crear</li>
    </ol>

    </section>
		
		<div class="panel panel-default">
			<div class="panel-heading">
			Asignar Recursos al Módulo	
			</div>
			<div class="panel-body">
				{!!	Form::open(['route'=>'modulos.store'])	!!}

					@include('proyecto.modulos.partials.form')

				{!!	Form::close()	!!}
			</div>
		</div>
	</div>
</div>
@endsection
