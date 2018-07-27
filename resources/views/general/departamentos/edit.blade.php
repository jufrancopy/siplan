@extends('layouts.master')
@section('content')
<div class="col-md-8 col-md-offset-2">
	<section class="content-header">
        <h1>Departamentos
            <small>Ciudades, Población y Densidad</small>
        </h1>
        <ol class="breadcrumb ">
            <li><a href="{{route('departamentos.index')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Cargar</li>
            <a href="{{route('departamentos.create')}}" class="btn btn-info btn-sm ml-auto pull-right" style="position: relative; top: -5px;">Nuevo</a>
        </ol>
    </section>
	<div class="panel panel-default">
		<div class="panel-heading">
		Editar Servicios	
		</div>
		<div class="panel-body">
			{!!	Form::model($departamento, ['route'=>['departamentos.update', $departamento->id], 'method'=>'PUT'])	!!}

				@include('general.departamentos.partials.form')
				
			{!!	Form::close()	!!}
		</div>
	</div>
</div>
@endsection
