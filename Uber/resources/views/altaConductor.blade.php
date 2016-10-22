@extends('plantilla')
@section('title', 'Alta')
@section('content')
<h1>Uber:: Conductores</h1>
			<a href="../conductores">Regresar a Conductores</a>
			{!!Form::open(['route'=>'conductores.store', 'method'=>'post'])!!}
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
			   <!--select class="form-control">
					  <option>CDMX</option>
					  <option>Edomex</option>
				</select-->
				<!--{!!Form::select('stateC',$estados)!!}-->
				{{ Form::select('stateC', $estados, null, array('class' => 'form-control')) }}
				
				<!--{!!Form::select('size', array('L' => 'Large', 'S' => 'Small'))!!}-->
				
			</div>
			<div class="form-group">
				{!!Form::label('Teléfono')!!}
				{!!Form::text('telefonoC',null,['class'=>'form-control','placeHolder'=>'Ingresa tu telefono'])!!}
			</div>
			<div class="form-group">
				{!!Form::label('Selecciona la fotografia')!!}
			    {!!Form::file('image')!!}
			  </div>
			  {!!Form::submit('Registrar Conductor',['class'=>'btn btn-primary'])!!}
			
			{!!Form::close()!!}
@endsection