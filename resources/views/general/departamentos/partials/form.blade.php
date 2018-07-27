<div class="form-group">
	{{	Form::label('nro_dpto', 'Dpto Nro')	}}
	{{	Form::text('nro_dpto', null,['class'=>'form-control', 'id'=> 'nro_dpto'])	}}
</div>
<div class="form-group">
	{{	Form::label('nombre', 'Nombre')	}}
	{{	Form::text('nombre', null,['class'=>'form-control', 'id'=> 'nombre'])	}}
</div>

<div class="form-group">
	{{	Form::label('capital', 'Capital')	}}
	{{	Form::text('capital', null, ['class'=>'form-control', 'id'=> 'capital'])	}}
</div>

<div class="form-group">
	{{	Form::label('poblacion', 'Poblacion')	}}
	{{	Form::text('poblacion', null, ['class'=>'form-control', 'id'=> 'poblacion'])	}}
</div>

<div class="form-group">
	{{	Form::label('superficie', 'Superficie')	}}
	{{	Form::text('superficie', null, ['class'=>'form-control', 'id'=> 'superficie'])	}}
</div>

<div class="form-group">
	{{	Form::label('densidad', 'Densidad')	}}
	{{	Form::text('densidad', null, ['class'=>'form-control', 'id'=> 'densidad'])	}}
</div>

<div class="form-group">
	{{	Form::submit('Guardar', ['class'=>'btn btn-sm btn-primary'])	}}
</div>

<!-- Aqui puede ir codido JavaScript personalizado -->
@section('script')


@endsection