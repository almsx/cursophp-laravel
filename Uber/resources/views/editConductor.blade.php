@extends('plantilla')
@section('title', 'Editar Conductor')
@section('content')
<a href="/conductores/"><button type="button" class="btn btn-default">Regresar</button></a> |

{!!Form::model($conductor, ['route'=> ['conductores.update',$conductor->idConductor],'method'=>'PUT'])!!}
			
			@include('formConductores')			

			{!!Form::submit('Actualizar Conductor',['class'=>'btn btn-primary'])!!}
			
			{!!Form::close()!!}

			{!!Form::open(['route'=> ['conductores.destroy',$conductor->idConductor],'method'=>'DELETE'])!!}
				{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
			{!!Form::close()!!}
@stop