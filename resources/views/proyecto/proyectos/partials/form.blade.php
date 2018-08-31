<div class="form-group">
	{{	Form::label('nombre', 'Nombre del Proyecto')	}}
	{{	Form::text('nombre', null,['class'=>'form-control', 'id'=> 'nombre'])	}}
</div>
<div class="form-group">
	{{	Form::label('administrativo_servicios_id', 'Selecciona Servicios Administrativos')	}}
	{{	Form::text('administrativo_servicios_id', null,['class'=>'form-control', 'id'=> 'administrativo_servicios_id'])	}}
</div>

<div class="form-group">
	{{	Form::label('equipo_tecnologicos_id', 'Selecciona Equipos Tecnologicos')	}}
	{{	Form::text('equipo_tecnologicos_id', null,['class'=>'form-control', 'id'=> 'equipo_tecnologicos_id'])	}}
</div>

<div class="form-group">
	{{	Form::label('talento_humanos_id', 'Selecciona Talentos Humanos')	}}
	{{	Form::text('talento_humanos_id', null,['class'=>'form-control', 'id'=> 'talento_humanos_id'])	}}
</div>
<div class="form-group">
	{{	Form::label('medicamento_insumos_id', 'Selecciona Medicamentos e Insumos')	}}
	{{	Form::text('medicamento_insumos_id', null,['class'=>'form-control', 'id'=> 'medicamento_insumos_id'])	}}
</div>

<div class="form-group">
	{{	Form::label('alcance', 'Alcance')	}}
	{{	Form::text('alcance', null,['class'=>'form-control', 'id'=> 'alcance'])	}}
</div>

<div class="form-group">
	{{	Form::label('responsables', 'Responsables')	}}
	{{	Form::text('responsables', null,['class'=>'form-control', 'id'=> 'responsables'])	}}
</div>

<div class="form-group">
	{{	Form::label('entrada', 'Entrada')	}}
	{{	Form::text('entrada', null,['class'=>'form-control', 'id'=> 'entrada'])	}}
</div>

<div class="form-group">
	{{	Form::label('salida', 'Salida')}}
	{{	Form::text('salida', null,['class'=>'form-control', 'id'=> 'salida'])	}}
</div>

<div class="form-group">
	{{	Form::label('expediente_nro', 'Nro de Expediente')}}
	{{	Form::text('expediente_nro', null,['class'=>'form-control', 'id'=> 'expediente_nro'])	}}
</div>

<div class="form-group">
	{{	Form::submit('Guardar', ['class'=>'btn btn-sm btn-primary'])	}}
</div>

