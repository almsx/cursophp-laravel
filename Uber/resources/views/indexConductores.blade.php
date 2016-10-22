@extends('plantilla')
@section('title', 'Conductores')
@section('content')
<a href="/conductores/create"><button type="button" class="btn btn-default">Agregar Conductor</button></a> |
<table class="table table-inverse">
	<thead class="thead-inverse">
		<th>Nombre</th>
		<th>Apellido Paterno</th>
		<th>Apellido Materno</th>
		<th>Teléfono</th>
		<th>Acciones</th>
	</thead>
	@foreach($conductores as $conductor)
	<tbody>
		<td>{{$conductor -> nombre}}</td>
		<td>{{$conductor -> aPaterno}}</td>
		<td>{{$conductor -> aMaterno}}</td>
		<td>{{$conductor -> telefono}}</td>
	</tbody>
	@endforeach
</table>