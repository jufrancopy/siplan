@extends('layouts.master')
@section('content')
<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				Seleccione un Mes
			</div>
				<div class="panel-body">
					@foreach ($meses as $mes)
				<ul>
					<li><a href="{{route('dptos', $mes->id)}}">{{$mes->mes}}</a></br></li>
				</ul>
					@endforeach
				</div>
		</div>
	</div>
@endsection