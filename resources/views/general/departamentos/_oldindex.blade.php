@extends ('layouts.master')
@section('content')
<div class="col-md-9 col-md-offset-2">
<div class="notice-board">
    <div class="panel panel-default">
        <div class="panel-heading">
            Departamentos con sus capitales.
            <div class="pull-right" >
                <a href="{{route('departamentos.create')}}" class="btn btn-info btn-sm ml-auto pull-right" style="position: relative; top: -5px;">Crear</a>
                <div class="dropdown"><!-- 
                    <button class="btn btn-success dropdown-toggle btn-xs" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                        <span class="glyphicon glyphicon-cog"></span>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Actualizar</a></li>
                    </ul>
                 --></div>
            </div>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Nro</th>
                            <th>Departamento</th>
                            <th>Ciudad</th>
                            <th>Población</th>
                            <th>Superficie</th>
                            <th>Densidad</th>
                            <th colspan="3" style= "text-align: center;">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($departamentos as $departamento)
                        <tr>
                            <td>{{ $departamento->nro_dpto}}</td>
                            <td>{{ $departamento->nombre}}</td>
                            <td>{{ $departamento->capital}}</td>
                            <td>{{ $departamento->poblacion}}</td> 
                            <td>{{ $departamento->superficie}}</td> 
                            <td>{{ $departamento->densidad}}</td> 
                            <td width="10px">
                                <a href="{{route('departamentos.show', $departamento->id)}}" class="btn btn-sm btn-default">Ver</a>
                            </td>
                            <td width="10px">
                                <a href="{{route('departamentos.edit',$departamento->id)}}" class="btn btn-sm btn-default">Editar</a>                  
                            </td>
                            <td width="10px">
                                {!! Form::open(['route'=>['departamentos.destroy', $departamento->id, 'id'=> 'miFormulario'],
                                'method'=>'DELETE']) !!}
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Esta seguro de eliminar el registro?')">Eliminar</button>
                            {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$departamentos->render()}}
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
       (function() {
         var form = document.getElementById('miFormulario');
         form.addEventListener('submit', function(event) {
           // si es false entonces que no haga el submit
           if (!confirm('Realmente desea eliminar?')) {
             event.preventDefault();
           }
         }, false);
       })();

       
</script>


@endsection



