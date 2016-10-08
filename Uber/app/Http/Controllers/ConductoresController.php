<?php
namespace Uber\Http\Controllers;
use Illuminate\Http\Request;
use Uber\Http\Requests;
use Uber\Conductores;
use Uber\Estados;
class ConductoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //return("index para conductores");
        //return view('conductores');
        //return view('indexConductores');
        
        //return view('altaConductor');
        $estados = Estados::lists('nombreEstado', 'idEstado');
        return view('altaConductor',compact('estados'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('altaConductor');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //return $request['nombreC'];
        
       \Uber\Conductores::create([
        'nombre' => $request['nombreC'],
        'aPaterno' => $request['aPaternoC'],
        'aMaterno' => $request['aMaternoC'],
        'idEstado' => $request['stateC'],
        'telefono' => $request['telefonoC'],
        'fotografia' => 'http://www.google.com/img.png',
        ]);

        return ("inserccion exitosa");
        
       
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