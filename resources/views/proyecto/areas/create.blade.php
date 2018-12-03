@extends('layouts.master')
@section('content')
<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<section class="content-header">
            <h1>Clasificación de Áreas Funcionales por Sectores Funcionales -
                <small>Modelo Italiano</small>
            </h1>
            <ol class="breadcrumb ">
                <li><a href="{{route('areas.index')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
                <li class="active">Cargar</li>
                
            </ol>
        </section>
		<div class="panel panel-default">
			<div class="panel-heading">
				
			</div>
			<div class="panel-body">
				{!!	Form::open(['route'=>'areas.store'])	!!}

					@include('proyecto.areas.partials.form')

				{!!	Form::close()	!!}
			</div>
		</div>
	</div>
</div>
@endsection
