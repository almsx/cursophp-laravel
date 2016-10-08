@extends('plantilla')
@section('title', 'Alta')
@section('content')
<h1>Uber:: Conductores</h1>
			<a href="../conductores">Regresar a Conductores</a>
			<form>
			<div class="form-group">
			    <label for="nombre">Nombre(s):</label>
			    <input type="text" class="form-control" id="nombreC" placeholder="Nombre">
			  </div>
			  <div class="form-group">
			    <label for="apellidop">Apellido Paterno:</label>
			    <input type="text" class="form-control" id="aPaternoC" placeholder="Apellido Paterno">
			  </div>
			   <div class="form-group">
			    <label for="apellidop">Apellido Materno:</label>
			    <input type="text" class="form-control" id="aMaternoC" placeholder="Apellido Materno">
			  </div>
			  <div class="form-group">
			    <label for="estado">Selecciona Estado:</label>
			   <select class="form-control" name="estadoC">
					  <option>CDMX</option>
					  <option>Edomex</option>
				</select>
			  </div>
			  <div class="form-group">
			    <label for="telefono">Teléfono</label>
			    <input type="phone" class="form-control" id="telefonoC" placeholder="1235654987">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputFile">Fotografía</label>
			    <input type="file" id="exampleInputFile">
			  </div>
			  <button type="submit" class="btn btn-primary">Enviar Conductor</button>
		  </form>
@endsection