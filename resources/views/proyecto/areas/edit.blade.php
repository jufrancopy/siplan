@extends('layouts.master')
@section('content')
<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<section class="content-header">
            <h1>Equipos Tecnológicos
                <small>Beta v1.0</small>
            </h1>
            <ol class="breadcrumb ">
                <li><a href="{{route('areas.index')}}"><i class="fa fa-dashboard"></i>Inicio</a></li>
                <li class="active">Editar</li>
            </ol>
        </section>
		<div class="panel panel-default">
			<div class="panel-heading">
			Editar Áreas
			</div>
			<div class="panel-body">
				{!!	Form::model($area, ['route'=>['areas.update', $area->id], 'method'=>'PUT'])	!!}

					@include('proyecto.areas.partials.form')
					
				{!!	Form::close()	!!}
			</div>
		</div>
	</div>
</div>
@endsection
