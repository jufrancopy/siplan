@extends('layouts.master')
@section('content')
<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<table width="100%">
		    <tr>
		        <td valign="top"><img src="{{asset('images/meteor-logo.png')}}" alt="" width="150"/></td>
		        <td align="right">
		            <h3>Prog.2</h3>
		            <pre>
		            	

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
			<!-- <td><strong>Responsable:</strong>Julio Franco</td> -->
		</tr>
		<table border="1" width="100%">
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
		    		<th></th>
		    		<th>
		    			junio
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
					            <td align="right">{{ number_format($prog2->monto)}} </td>
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