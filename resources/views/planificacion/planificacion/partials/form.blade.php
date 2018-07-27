<div class="form-group">
	{{	Form::label('dpto', 'dpto')	}}
	{{	Form::text('dpto', null,['class'=>'form-control', 'id'=> 'dpto'])	}}
</div>

<div class="form-group">
	{{	Form::label('costo', 'Costo')	}}
	{{	Form::text('costo', null, ['class'=>'form-control', 'id'=> 'costo'])	}}
</div>

<div class="form-group">
	{{	Form::label('sexo', 'Sexo')	}}
	{{	Form::checkbox('sexo', array('femenino' => 'Femenino', 'masculino' => 'masculino'), ['class'=>'form-control'])}}
</div>


<div class="form-group">
	{{	Form::submit('Guardar', ['class'=>'btn btn-sm btn-primary'])	}}
</div>

<!-- Aqui puede ir codido JavaScript personalizado -->
@section('script')
@endsection