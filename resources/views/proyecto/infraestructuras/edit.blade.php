@extends('layouts.master')
@section('content')
<div class="container">
	<div class="col-md-8 col-md-offset-2">
		
		<section class="content-header">
			<h1>Infraestructura
            <small>Beta v1.0</small>
        	</h1>
        	<ol class="breadcrumb ">
        		<li><a href="{{route('publico')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        		<li class="active"><a href="{{route('infraestructuras.index')}}">Infraestructura</a></li>
        		<li class="active">Editar</li>
			</ol>
    	</section>
    	<div class="panel panel-default">
			<div class="panel-heading">
			Editar Servicios	
			</div>
			<div class="panel-body">
				{!!	Form::model($infraestructura, ['route'=>['infraestructuras.update', $infraestructura->id], 'method'=>'PUT'])	!!}

					@include('proyecto.infraestructuras.partials.form')
					
				{!!	Form::close()	!!}
			</div>
		</div>
	</div>
</div>
@endsection
