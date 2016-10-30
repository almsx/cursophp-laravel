@extends('plantilla')
@section('title', 'Alta')
@section('content')

<!--Vista de Errores-->

@if(count($errors) >0)
<div class="alert alert-danger alert-dismisible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"></button><span aria-hidden="true">&times;</span>
	<ul>
		@foreach($errors->all() as $error)
			<li>{!!$error!!}</li>
		@endforeach
	</ul>
</div>
@endif


<ul class="nav navbar-nav">
                    <li><a href="{{ url('/conductores') }}">Panel de Control</a></li>
                </ul>		
<h1>Uber:: Conductores</h1>
			
			{!!Form::open(['route'=>'conductores.store', 'method'=>'post'])!!}

			@include('formConductores')
			
			<!--div class="form-group">
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
				{!!Form::text('telefono',null,['class'=>'form-control','placeHolder'=>'Ingresa tu telefono'])!!}
			</div>
			
			<div class="form-group">
    		{!! Form::label('Fotografía') !!}
    		{{ Form::file('thefile', ['class' => 'field']) }}
			</div-->

			

			{!!Form::submit('Registrar Conductor',['class'=>'btn btn-primary'])!!}
			
			{!!Form::close()!!}
@endsection