@extends('layouts.master')
@section('content')
<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				Programas 
			</div>
			<div class="panel-body">
				<ul>
					<li><a href="{{route('prog1')}}" >Prog. 1 - Gestión administrativa para generación de valor público</a></li>
					<li><a href="{{route('prog2')}}" >Prog. 2 - Consultas, inmunizaciones, atención de urgencias, estudios médicos, prevención y promoción de la salud</a></li>
					<li><a href="#" >Prog. 3 - Proceso y pago de prestaciones jubilatorias y de pensiones cotizantes IPS</a></li>
					<li><a href="#" >Prog. 4 - Fondo de jubilaciones del Poder Legislativo coadministrado</a></li>
				</ul>
			</div>
			
			</div>
		</div>
	</div>
@endsection