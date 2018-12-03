<div class="form-group">
	{{	Form::label('dpto', 'Departamento:')	}}
	{!! Form::select('dpto_id', $departamentos, null,['class'=>'js-example-responsive', 'style'=>'width:100%'])!!}
</div>

<div class="form-group">
	{{	Form::label('ciudad', 'Ciudad:')	}}
	{{ Form::select('ciudad_id', $ciudades,null,['class'=>'js-example-responsive', 'style'=>'width:100%'])}}
</div>

<div class="form-group">
	{{	Form::label('tipo', 'Tipo')	}}
	{{	Form::select('tipo', array('propios' => 'propios', 'convenios' => 'convenios', 'tercerizados' => 'tercerizados'), NULL, array('class' => 'form-control')) }}
</div>

<div class="form-group">
	{{	Form::label('nivel', 'Nivel:')	}}
	{{  Form::select('nivel_id', $niveles, null,['class'=>'js-example-responsive', 'style'=>'width:100%']) }}
</div>


<div class="form-group">
	{{	Form::label('cantidad', 'Cantidad de Centros:')	}}
	{{	Form::text('cantidad', null,['class'=>'form-control','id'=>'cantidad'])	}}
</div>

<div class="form-group">
	{{	Form::label('camas', 'Cantidad de Camas:')	}}
	{{	Form::text('camas', null,['class'=>'form-control','id'=>'camas'])	}}
</div>

<div class="form-group">
	{{	Form::label('referencia', 'Según informe de:')	}}
	{{	Form::text('referencia', null,['class'=>'form-control','id'=>'referencia'])	}}
</div>

<div class="form-group">
	{{	Form::label('anho', 'Año:')	}}
	{!! Form::select('anho_id', $anhos ,null,['class'=>'js-example-responsive', 'style'=>'width:100%'])!!}
</div>

<div class="form-group">
	{{	Form::submit('Guardar', ['class'=>'btn btn-sm btn-primary'])	}}
</div>

<!-- Aqui puede ir codido JavaScript personalizado -->
@section('script')
@endsection

