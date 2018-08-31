@extends('layouts.master')
@section('content')
<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<section class="content-header">
        <h1>Medicamentos e Insumos
            <small>Beta v1.0</small>
        </h1>
	<ol class="breadcrumb ">
        <li><a href="{{route('publico')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active"><a href="{{route('med_inms.index')}}">Medicamentos e Insumos</a></li>
        <li class="active">Editar</li>
	</ol>

    </section>
		
		<div class="panel panel-default">
			<div class="panel-heading">
			Editar Medicamentos e Insumos	
			</div>
			<div class="panel-body">
				{!!	Form::model($med_inm, ['route'=>['med_inms.update', $med_inm->id], 'method'=>'PUT'])	!!}

					@include('proyecto.med_inms.partials.form')
					
				{!!	Form::close()	!!}
			</div>
		</div>
	</div>
</div>
@endsection
