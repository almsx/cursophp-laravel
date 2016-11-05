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


<h1>Bienvenido!!</h1>     
<h3>Uber:: Conductores</h3>
            
            {!!Form::open(['route'=>'log.store', 'method'=>'post'])!!}

            
            <div class="form-group">
                {!!Form::label('Usuario(*):')!!}
                {!!Form::text('usuarioC',null,['class'=>'form-control','placeHolder'=>'Ingresa tu Usuario'])!!}
            </div>
            <div class="form-group">
                {!!Form::label('Contraseña(*):')!!}
                {!!Form::password('passwordC',['class'=>'form-control','placeHolder'=>'Ingresa tu Contraseña'])!!}
            </div>
            

            {!!Form::submit('Entrar Conductor',['class'=>'btn btn-primary'])!!}
            
            {!!Form::close()!!}
@endsection