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

<div class="container">
            
    <div class="content">
        <div class="title">Bienvenidos a Uber</div>
    </div>
    
    <div class="content">
        {!!link_to('usuarios', $title = 'Pasajeros', $attributes = ['class'=>'btn btn-primary']) !!} </td>
        {!!link_to('conductores', $title = 'Conductores', $attributes = ['class'=>'btn btn-primary']) !!} </td>
    </div>

</div>