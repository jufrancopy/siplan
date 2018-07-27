@extends('layouts.master')
@section('content')
<div class="container">
	<div class="col-md-8 col-md-offset-2">
	<section class="content-header">
        <h1>Departamentos
            <small>Ciudades, Población y Densidad</small>
        </h1>
        <ol class="breadcrumb ">
        	<li><a href="{{route('departamentos.index')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        	<li class="active">Cargar</li>
    	</ol>
    </section>
		
		<div class="panel panel-default">
			<div class="panel-body">
				{!!	Form::open(['route'=>'departamentos.store'])	!!}

					@include('general.departamentos.partials.form')

				{!!	Form::close()	!!}
			</div>
		</div>
	</div>
</div>
@endsection
