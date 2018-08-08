@extends('layouts.master')
@section('content')
<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				Seleccion un Departamento
			</div>
				<div class="panel-body">
					@foreach ($iddptos as $iddpto)
				<div class="list-group">
					<a href="{{url('listado', ['idmes' => $idmes->id, 'iddpto' => $iddpto->id])}}">{{$iddpto->nombre}}</a>
					@endforeach
				</div>
		</div>
	</div>
@endsection