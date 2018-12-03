{{Form::hidden('user_id', auth()->user()->id)}}
<div class="form-group">
	{{	Form::label('sector', 'Sector')	}}
	{{	Form::text('sector', null,['class'=>'form-control', 'id'=> 'sector'])	}}
</div>

<div class="form-group">
	{{	Form::label('subsector', 'Sub - Sector')	}}
	{{	Form::text('subsector', null, ['class'=>'form-control', 'id'=> 'subsector'])	}}
</div>

<div class="form-group">
	{{	Form::label('area_funcional', 'Area Funcional')	}}
	{{	Form::text('area_funcional', null, ['class'=>'form-control', 'id'=> 'area_funcional'])	}}
</div>

<div class="form-group">
	{{	Form::submit('Guardar', ['class'=>'btn btn-sm btn-primary'])	}}
</div>

