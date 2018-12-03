<div class="form-group">
	{{	Form::label('nombre', 'Nombre del Modulo')	}}
	{{	Form::text('nombre', null,['class'=>'form-control', 'id'=> 'nombre'])	}}
</div>


<div class="form-group">
	{{ Form::label('administrativo_servicios', 'Servicios Administrativos:') }} 
    <select multiple="multiple" name="administrativo_servicios[]" id="administrativo_servicios" href="javascript:void(0)" class="js-example-responsive" style="width:100%">

        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
        Agregar
    @foreach($administrativo_servicios as $key => $administrativo_servicio)
        {-- in_array verifica el valor (llave => valor) este contenido en el array --}
        <option value="{{ $key }}" >{{ $administrativo_servicio->item }}</option>
    @endforeach
    </select> 

   {{-- <a class="btn btn-primary" href="javascript:void(0)" id="addInput">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
    </a>    

    <div id="dynamicDiv">
        <label>Cantidad</label>
        <p>
            <input type="text" id="inputeste" size="20" value="" placeholder="" />
                <a class="btn btn-danger" href="javascript:void(0)" id="remInput">
                    <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
                        Remover
                </a>
        </p>
    </div>--}}
</div>
<div class="form-group">
	{{ Form::label('equipo_tecnologicos', 'Equipos Tecnologicos:') }} 
    <select multiple="multiple" name="equipo_tecnologicos[]" id="equipo_tecnologicos" class="js-example-responsive" style="width:100%">
    @foreach($equipo_tecnologicos as $key => $equipo_tecnologico)
        <option value="{{ $key }}" >{{ $equipo_tecnologico->item }}</option>
    @endforeach
    </select>    
</div>

<div class="form-group">
	{{ Form::label('talento_humanos', 'Talentos Humanos:') }} 
    <select multiple="multiple" name="talento_humanos[]" id="talento_humanos" class="js-example-responsive" style="width:100%">
    @foreach($talento_humanos as $key => $talento_humano)
        <option value="{{ $key }}" >{{ $talento_humano->item }}</option>
    @endforeach
    </select>    
</div>

<div class="form-group">
	{{ Form::label('medicamento_insumos', 'Medicamentos e Insumos:') }} 
    <select multiple="multiple" name="medicamento_insumos[]" id="medicamento_insumos" class="js-example-responsive" style="width:100%">
    @foreach($medicamento_insumos as $key => $medicamento_insumo)
        <option value="{{ $key }}" >{{ $medicamento_insumo->item }}</option>
    @endforeach
    </select>    
</div>

<div class="form-group">
	{{	Form::label('responsables', 'Responsables')	}}
	{{	Form::text('responsables', null,['class'=>'form-control', 'id'=> 'responsables'])	}}
</div>

<div class="form-group">
	{{	Form::label('expediente_nro', 'Nro de Expediente')}}
	{{	Form::text('expediente_nro', null,['class'=>'form-control', 'id'=> 'expediente_nro'])	}}
</div>

<div class="form-group">
	{{	Form::submit('Guardar', ['class'=>'btn btn-sm btn-primary'])	}}
</div>
@section('script')

@endsection