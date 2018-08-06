@extends('layouts.master')
@section('content')
<div class="container">
	<div class="col-md-8 col-md-offset-2">
		
        <h1>Principal</h1>
        <div class="panel panel-default">
			<div class="panel-heading">
				Programas 
			</div>
			<div class="panel-body">
				<ul>
					<li>Gestión administrativa para generación de valor público</li>
					<li>Consultas, inmunizaciones, atención de urgencias, estudios médicos, prevención y promoción de la salud</li>
					<li>Proceso y pago de prestaciones jubilatorias y de pensiones cotizantes IPS</li>
					<li>Fondo de jubilaciones del Poder Legislativo coadministrado</li>
				</ul>
			</div>
			<p>
	            <a href="{{ route('products.pdf') }}" class="btn btn-sm btn-primary">
	                Descargar productos en PDF
	            </a>
        	</p>
			</div>
		</div>
	</div>
@endsection