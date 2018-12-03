@extends('layouts.master')
@section('content')
<div class="container">
	<div class="col-md-8 col-md-offset-2">
	
    </p>
    </br></br>
		<table width="100%">
		    <tr>
		    	<td valign="top"></td>

		    	<td align="right">
		    		
		    		<pre>
		    			<img src="{{asset('imagenes/IPSlogo.png')}}" width="100"/ align="left">
		            	
		            	Dirección de Planificación 
						Dpto. de Planificación y Evaluación
			        </pre>
		        </td>
		    </tr>

		  </table>

		<table width="100%">
			<tr>
				<td><strong>Prog.2 </strong>- Consultas, inmunizaciones, atención de urgencias, estudios médicos, prevención y promoción de la salud</td>
		    </tr>
		    <tr>
		    	<td><strong>Fuente:</strong>SPR</td>
		    </tr>
		</table>
		<tr>
			<!-- <td><strong>Responsable:</strong>Julio Franco</td> -->
		</tr>
		<table border="1" width="100%">
			<thead>
				<tr>
					
		        	<th>Dpto</th>
		        	<th>Mes</th>
		        	<th>Rubro</th>
		        	<th>Monto</th>
		    	</tr>
		    </thead>
		    <tbody>
		    	<tr>

		    		<th>
		    			@foreach ($dptos as $dpto)
		    			<ul>	
		    				<li>{{$dpto->nombre}}</li>
		    				</ul>
		    			@endforeach
		    		</th>
		    		
		    		<th>
		    			@foreach ($meses as $mes)
		    			<ul>	
		    				<li>{{$mes->mes}}</li>
		    				</ul>
		    			@endforeach
		    		</th>
		    		<td align="right">
			        	<table > 
					       <tr> @foreach ($prog2s as $prog2)
					            <td align="right">{{$prog2->rubro}} </td>
					        </tr>@endforeach
					    </table>
					</td>

					<td align="right">
			        	<table > 
					       <tr> @foreach ($prog2s as $prog2)
					            <td align="right">{{ number_format($prog2->sum)}} </td>
					        </tr>@endforeach
					    </table>
					</td>
			</tr>
			</tbody>
			<thead style="background-color: lightgray;">
		        <tr>
		            <th >Total</th>
		            <td colspan="1" ></td>
		            <td >{{$prog2s->count()}}</td>
		            <td align="right">{{number_format($total)}}</td>
		        </tr>
		    </thead>

		</table>
		  
		</div>
	</div>



@endsection