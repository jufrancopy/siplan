<style type="text/css">
   .breakNow { 
   page-break-inside:avoid; page-break-after:always; 
   }
   table{
   border-collapse: collapse; width: 100%;
   }
   table tr:nth-child(2n-1) td {
   background: #F5F5F5;
   }
   table th,
   table td {
   text-align: center;
   }
   table th {
   padding: 5px 20px;
   color: #5D6975;
   border-bottom: 1px solid #C1CED9;
   white-space: nowrap;        
   font-weight: normal;
   }
   td{
   border:1px solid #ccc;
   }
   thead{
   width:100%;position:fixed;
   height:109px;
   }
   #project {
   float: left;
   font-size: 0.8em;
   color: #5D6975;
   }
   #company {
   float: right;
   text-align: right;
   font-size: 0.8em;
   color: #5D6975;
   }
</style>
<body>
   <div id="project">
      @foreach ($nombreDpto as $dpto) 
      <div><span>Departamento: </span>{{ $dpto->nombre}}</div>
      @endforeach
      @foreach ($nombreMes as $mes) 
      <div><span>Mes: </span>{{ $mes->mes}}</div>
      @endforeach
   </div>
   <div id="company">
   <div>Instituto de Prevision Social - Dirección de Planificación</div>
   <div><a href="mailto:company@example.com">jufranco@ips.gov.py</a></div>
   <table border="1" >
      <thead>
         <tr>
            <th>Departamento</th>
            <th>Mes</th>
            <th>Rubro</th>
            <th>Monto</th>
         </tr>
      </thead>
      <tbody>
         @php $i=0 @endphp
         @foreach ($datos as $dato) 
         @php $i++ @endphp
         @if( $i % 42 == 42 ){ echo '
         <div class="breakNow">
            <h1>Pagina 2
         </div>
         </h1>'; .... } 
         @endif
         <tr>
            @if (!isset($x[$dato['dpto']]))
            @php $x[$dato['dpto']] = true; @endphp
            <td rowspan="{{ count($datos) }}">{{ $dato['dpto'] }}</td>
            @endif
            @if (!isset($y[$dato['mes']]))
            @php $y[$dato['mes']] = true; @endphp
            <td rowspan="{{ count($datos) }}">{{ $dato['mes'] }}</td>
            @endif
            <td>{{ $dato['rubro'] }}</td>
            <td>{{ $dato['monto'] }}</td>
         </tr>
         @endforeach
      </tbody>
   </table>
</body>