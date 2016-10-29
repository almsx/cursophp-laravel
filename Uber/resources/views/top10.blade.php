@extends('plantilla')
@section('title', 'Conductores')

@if(Session::has('message'))
	<!--div class="alert alert-success alert-dismisible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"></button><span aria-hidden="true">&times;</span>
		
	</div-->
	
	<div class="alert alert-success alert-dismissible" role="alert">
    	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    	<strong>Felicidades, tu </strong>{{Session::get('message')}}
    </div>


@endif

@section('content')

<!--Hipervinculos y tabla-->
<a href="/conductores/create"><button type="button" class="btn btn-default">Agregar Conductor</button></a>
<table class="table table-inverse">
	<thead class="thead-inverse">
		<th>Nombre</th>
		<th>Apellido Paterno</th>
		<th>Apellido Materno</th>
		<th>Teléfono</th>
		<th>Actualizar</th>
	</thead>
	@foreach($conductores as $conductor)
	<tbody>
		<td>{{$conductor -> nombre}}</td>
		<td>{{$conductor -> aPaterno}}</td>
		<td>{{$conductor -> aMaterno}}</td>
		<td>{{$conductor -> telefono}}</td>
		<td>{!!link_to_route('conductores.edit', $title = 'Editar', $parameters = $conductor->idConductor, $attributes = ['class'=>'btn btn-primary']) !!} </td>
	</tbody>
	@endforeach
</table>