@extends('plantilla')
@section('title', 'Editar Conductor')
@section('content')
<a href="/conductores/"><button type="button" class="btn btn-default">Regresar</button></a> |

{!!Form::model($conductor, ['route'=> ['conductores.update',$conductor->idConductor],'method'=>'PUT'])!!}
			
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
			    {{ Form::select('stateC', $estados, null, array('class' => 'form-control')) }}
			</div>
			
			<div class="form-group">
				{!!Form::label('Teléfono')!!}
				{!!Form::text('telefono',null,['class'=>'form-control','placeHolder'=>'Ingresa tu telefono'])!!}
			</div>
			
			<div class="form-group">
    		{!! Form::label('Fotografía') !!}
    		{{ Form::file('thefile', ['class' => 'field']) }}
			</div>

			

			{!!Form::submit('Actualizar Conductor',['class'=>'btn btn-primary'])!!}
			
			{!!Form::close()!!}

			{!!Form::open(['route'=> ['conductores.destroy',$conductor->idConductor],'method'=>'DELETE'])!!}
				{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
			{!!Form::close()!!}
@stop