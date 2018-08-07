@extends('layouts.master')
@section('content')
<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				Seleccion un Departamento
			</div>
				<div class="panel-body">
					@foreach ($dptoids as $dptoid)
				<div class="list-group">
					<a href="{{route('list_prog2', $dptoid->id)}}" class="list-group-item list-group-item-info">{{$dptoid->nombre}}</a></br>
				
					@endforeach
				</div>
		</div>
	</div>
@endsection