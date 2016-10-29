<div class="form-group">
				{!!Form::label('Usuario(*):')!!}
				{!!Form::text('usuarioC',null,['class'=>'form-control','placeHolder'=>'Ingresa tu Usuario'])!!}
			</div>

			<div class="form-group">
				{!!Form::label('Contraseña(*):')!!}
				{!!Form::password('passwordC',['class'=>'form-control','placeHolder'=>'Ingresa tu Contraseña'])!!}
			</div>


			<div class="form-group">
				{!!Form::label('Nombre')!!}
				{!!Form::text('nombre',null,['class'=>'form-control','placeHolder'=>'Ingresa tu nombre'])!!}
			</div>
			<div class="form-group">
				{!!Form::label('Apellido Paterno')!!}
				{!!Form::text('aPaterno',null,['class'=>'form-control','placeHolder'=>'Ingresa tu Apellido Paterno'])!!}
			</div>
			<div class="form-group">
				{!!Form::label('Apellido Materno')!!}
				{!!Form::text('aMaterno',null,['class'=>'form-control','placeHolder'=>'Ingresa tu Apellido Materno'])!!}
			
			</div>
			<div class="form-group">
				{!!Form::label('Selecciona Estado:')!!}
				<!--Formulario Normal-->
			    <!--{{ Form::select('stateC', $estados, null, array('class' => 'form-control')) }}-->
			    <!--Formulaio con buscador-->
			    {{ Form::select('stateC', $estados, null, array('class' => 'form-control chosen-select')) }}
			</div>
			
			<div class="form-group">
				{!!Form::label('Teléfono')!!}
				{!!Form::text('telefono',null,['class'=>'form-control','placeHolder'=>'Ingresa tu telefono'])!!}
			</div>
			
			<div class="form-group">
    		{!! Form::label('Fotografía') !!}
    		{{ Form::file('thefile', ['class' => 'field']) }}
			</div>