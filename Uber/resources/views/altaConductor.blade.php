@extends('plantilla')
@section('title', 'Alta')
@section('content')
<h1>Uber:: Conductores</h1>
			<!--a href="../conductores">Regresar a Conductores</a-->
			{!!Form::open(['route'=>'conductores.store', 'method'=>'post'])!!}
			
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
				{!!Form::text('nombreC',null,['class'=>'form-control','placeHolder'=>'Ingresa tu nombre'])!!}
			</div>
			<div class="form-group">
				{!!Form::label('Apellido Paterno')!!}
				{!!Form::text('aPaternoC',null,['class'=>'form-control','placeHolder'=>'Ingresa tu Apellido Paterno'])!!}
			</div>
			<div class="form-group">
				{!!Form::label('Apellido Materno')!!}
				{!!Form::text('aMaternoC',null,['class'=>'form-control','placeHolder'=>'Ingresa tu Apellido Materno'])!!}
			
			</div>
			<div class="form-group">
				{!!Form::label('Selecciona Estado:')!!}
			    {{ Form::select('stateC', $estados, null, array('class' => 'form-control')) }}
			</div>
			
			<div class="form-group">
				{!!Form::label('Teléfono')!!}
				{!!Form::text('telefonoC',null,['class'=>'form-control','placeHolder'=>'Ingresa tu telefono'])!!}
			</div>
			
			<div class="form-group">
    		{!! Form::label('Fotografía') !!}
    		{!! Form::file('image', null) !!}
			</div>

			

			{!!Form::submit('Registrar Conductor',['class'=>'btn btn-primary'])!!}
			
			{!!Form::close()!!}
@endsection