@extends('layouts.master')
@section('content')
<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<table width="100%">
		    <tr>
		        <td valign="top"><img src="{{asset('images/meteor-logo.png')}}" alt="" width="150"/></td>
		        <td align="right">
		            <h3>Prog.1</h3>
		            <pre>
		            	Asunción
		                Prog.1
		            </pre>
		        </td>
		    </tr>

		  </table>

		<table width="100%">
		    <tr>
		        <td><strong>Fuente:</strong>SPR</td>
		    </tr>
		</table>
		<tr>
			<td><strong>Responsable:</strong>Julio Franco</td>
		</tr>
		<table width="100%">
			<thead style="background-color: lightgray;">
				<tr>
					
		        	<th>Dpto</th>
		        	<th>Mes</th>
		        	<th>Rubro</th>
		        	<th>Monto</th>
		    	</tr>
		    </thead>
		    <tbody>
		    	<tr>
		    		<th>Asunción</th>
		        	<th>Junio</th>
		        	<td align="right">
			        	<table> 
					       <tr> @foreach ($prog1s as $prog1)
					            <td align="right">{{$prog1->rubro}} </td>
					        </tr>@endforeach
					    </table>
					</td>
				<td align="right">
		        	<table> 
				       <tr> @foreach ($prog1s as $prog1)
				            <td align="right">{{ number_format($prog1->monto)}} </td>
				        </tr>@endforeach
				    </table>
				</td>
			</tr>
			</tbody>
			<thead style="background-color: lightgray;">
		        <tr>
		            <th >Total</th>
		            <td colspan="2" ></td>
		            <td align="right">{{number_format($total)}}</td>
		        </tr>
		    </thead>
		</table>
		  
		</div>
	</div>



@endsection