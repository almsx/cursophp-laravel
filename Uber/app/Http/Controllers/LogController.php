<?php

namespace Uber\Http\Controllers;


use Illuminate\Http\Request;

use Auth;
use Session;
use Redirect;
use Uber\Http\Requests;
//use Uber\Http\Requests\LoginRequest;
use DB;

class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       

        $sessionName = Session::get('nombreConductor');
        
        $tam = sizeof($sessionName);
       
        if($tam > 0 ){
            return Redirect::to('/conductores');
            //return "Si hay algo";
        } else {
            return view('loginVista');
            
        }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function logoutConductor(){

        Session::flush();
        Session::flash('message','Sesión cerrada con éxito.');
        return Redirect::to('/log');

        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LoginRequest $request)
    {
        
        $user_BD = $request['usuarioC'];
        $pass_BD = $request['passwordC'];

        $usuarios = DB::select("SELECT *FROM Conductores WHERE usuarioC = '".$user_BD."' AND passwordC = '".$pass_BD."'");
        
        $tam = sizeof($usuarios);

        if($tam > 0){
            
            $name = $usuarios[0]->nombre;
            $lastName = $usuarios[0]->aPaterno;
            $nombreCompleto = $name.' '.$lastName;
            
            Session::set('nombreConductor', $nombreCompleto);
            return Redirect::to('/conductores');
            
            //var_dump($usuarios);
       

        } else {
            
            Session::flash('message','Conductor no encontrado.');
            return Redirect::to('/log');

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
