@extends('layouts.master')
@section('content')
<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<section class="content-header">
			<h3>Editar Establecimiento</h3>
			<ol class="breadcrumb">
				<li><a href="{{route('establecimientos.index')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
            	<li class="active">Editar</li>
        	</ol>
      </section>
		<div class="panel panel-default">
			
			<div class="panel-body">
				{!!	Form::model($establecimiento, ['route'=>['establecimientos.update', $establecimiento->id], 'method'=>'PUT'])	!!}

					@include('general.establecimientos.partials.form')
					
				{!!	Form::close()	!!}
			</div>
		</div>
	</div>
</div>
@endsection
