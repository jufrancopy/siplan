@extends('layouts.master')
@section('content')
<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				Prog. 2 -  Gestión administrativa para generación de valor público
			</div>
				<div class="panel-body">
					@foreach ($dptoids as $dptoid)
				<ul>
					<li><a href="{{route('listdptos')}}">{{$dptoid->nombre}}</a></br></li>
				</ul>
					@endforeach
				</div>
		</div>
	</div>
@endsection