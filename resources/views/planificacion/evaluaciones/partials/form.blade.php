<div class="form-group">
	{{	Form::label('item', 'Item')	}}
	{{	Form::text('item', null,['class'=>'form-control', 'id'=> 'item'])	}}
</div>

<div class="form-group">
	{{	Form::label('costo', 'Costo')	}}
	{{	Form::text('costo', null, ['class'=>'form-control', 'id'=> 'costo'])	}}
</div>

<div class="form-group">
	{{	Form::label('tipo', 'Tipo')	}}
	{{	Form::select('tipo', array('informatico' => 'informatico', 'biomedico' => 'biomedico','class'=>'form-control'))	}}
</div>

<div class="form-group">
	{{	Form::submit('Guardar', ['class'=>'btn btn-sm btn-primary'])	}}
</div>

<div class="form-group">
	{{	Form::label('tipo', 'Tipo')	}}
	{{	Form::select('tipo', array('nueva' => 'Nueva', 'readecuacion' => 'Readeacuación', 'read_ampl' => 'Readecuación y Ampliación'))	}}
</div>
<!-- Aqui puede ir codido JavaScript personalizado -->
@section('script')
@endsection