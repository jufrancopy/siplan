@extends('layouts.master')
@section('content')
<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<section class="content-header">
            <h1>Talentos Humanos
                <small>Beta v1.0</small>
            </h1>
            <ol class="breadcrumb ">
                <li><a href="{{route('publico')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
                <li class="active"><a href="{{route('tls_hs.index')}}">Talentos Humanos</a></li>
                <li class="active">Cargar</li>
            </ol>
        </section>
		<div class="panel panel-default">
			<div class="panel-heading">
			Talentos Humanos	
			</div>
			<div class="panel-body">
				{!!	Form::open(['route'=>'tls_hs.store'])	!!}

					@include('proyecto.tls_hs.partials.form')

				{!!	Form::close()	!!}
			</div>
		</div>
	</div>
</div>
@endsection
