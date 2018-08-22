<table width="100%" style="background-color: lightgray;" >
	<tr>
    	<td>
    		Reporte correspondinente a <b>{{$nombreDpto[0]->nombre}}</b>
    	</td>
    </tr>
    <tr>
    	<td>
    		Mes:<b>{{$nombreMes[0]->mes}}</b>
    	</td>
    </tr>
    <tr>
    	<td>
    		Año:<b>2018</b>
    	</td>
    </tr>
    </table>
    <table width="100%">
    <thead style="background-color: lightgray;">
    	<tr>
    		<th>Departamento</th>
    		<th>Mes</th>
    		<th>Rubro</th>
    		<th>Monto</th>
    	</tr>
    </thead>
    <tbody>
    	@foreach($datos as $dato)
    	<tr>
    		<td>{{ $dato['dpto'] }}</td>
    		<td>{{ $dato['mes'] }}</td>
    		<td>{{ $dato['rubro'] }}</td>
            <td>{{ $dato['monto'] }}</td>
		</tr>
		@endforeach
    </tbody>
     

    <thead style="background-color: lightgray;">
    	<tr>
            <th >Total</th>
            <td colspan="2" ></td>
            
            <td align="right">{{number_format($total)}}</td>
	    </tr>
	</thead>
</table>
