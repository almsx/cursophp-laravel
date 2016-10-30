@extends('plantilla')
@section('title', 'Conductores')

@if(Session::has('message'))
	<!--div class="alert alert-success alert-dismisible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"></button><span aria-hidden="true">&times;</span>
		
	</div-->
	
	<div class="alert alert-success alert-dismissible" role="alert">
    	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    	<strong>{{Session::get('message')}}</strong>
    </div>

    <div id="notifications"></div>


@endif

@section('content')
<ul class="nav navbar-nav">
                    <li><a href="{{ url('/conductores/create') }}">Agregar Conductor</a></li>
                </ul>
                
                
<table class="table table-inverse">
	<thead class="thead-inverse">
		<th>Nombre</th>
		<th>Apellido Paterno</th>
		<th>Apellido Materno</th>
		<th>Teléfono</th>
		<th>Estado</th>
		<th>Actualizar</th>
	</thead>
	@foreach($conductores as $conductor)
	<tbody>
		<td>{{$conductor -> nombre}}</td>
		<td>{{$conductor -> aPaterno}}</td>
		<td>{{$conductor -> aMaterno}}</td>
		<td>{{$conductor -> telefono}}</td>
		<td>{{$conductor -> nombreEstado}}</td>
		<td>{!!link_to_route('conductores.edit', $title = 'Editar', $parameters = $conductor->idConductor, $attributes = ['class'=>'btn btn-primary']) !!} </td>
	</tbody>
	@endforeach
</table>

{!!$conductores->render()!!}

@stop