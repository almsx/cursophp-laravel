<?php

namespace Uber\Http\Controllers;

use Illuminate\Http\Request;

use uber\Http\Requests;

class PruebaController extends Controller
{
    
    public function index(){
    	return("hola desde  controller");
    }
    public function nombre($nombre){
    	return("Hola mi nombre es ".$nombre);
    }
}