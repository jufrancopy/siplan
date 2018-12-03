@extends('layouts.master')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
			    <div class="panel-heading ">
			        Gráfico de Areas Funcionales por Sectores Funcionaleso
			        </div>
			        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
			        <script type="text/javascript">
                          google.charts.load('current', {'packages':['corechart']});
                          google.charts.setOnLoadCallback(drawChart);
                    
                          function drawChart() {
                    
                            var data = google.visualization.arrayToDataTable([
                              ['id', 'Cursos'],
                              @foreach ($areas as $area)
                                ['{{$area->sector}}', {{$area->total}}],
                              @endforeach
                            ]);
                    
                            var options = {
                              title: 'Gráfico de Areas Funcionales por Sectores Funcionales'
                            };
                    
                            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                    
                            chart.draw(data, options);
                          }
                    </script>
                <div class="panel-body " id="piechart" style="width: 500; height: 500px";></div>
                <div class="panel-footer">
                <a href="{{ route('areas.index') }}"><i class="fas fa-arrow-left"></i></a>
            </div>
            </div>
        </div>
    </div>
</div>    

@endsection