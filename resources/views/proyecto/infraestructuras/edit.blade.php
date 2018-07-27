@extends('layouts.master')
@section('content')
<div class="container">
	<div class="col-md-8 col-md-offset-2">
		
		<section class="content-header">
			<h1>Servicios Administrativos
            <small>Beta v1.0</small>
        	</h1>
        	<ol class="breadcrumb ">
        		<li><a href="{{route('publico')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        		<li class="active">Infraestructura</li>
        		 <li class="active">Editar</li>
        		<a href="{{route('servs_adms.create')}}" class="btn btn-info btn-sm ml-auto pull-right">Crear</a>
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
