<?php
namespace Uber\Http\Controllers;
use Illuminate\Http\Request;
use Uber\Http\Requests\StoreConductorPostRequest;
use Uber\Http\Requests;
use Uber\Conductores;
use Uber\Estados;
//Password Hash
use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Facades\DB;
class ConductoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function saludaPepe(){
        return ("hola pepe");
    }

    public function top10()
    {
       $conductores = Conductores::where('idEstado',2)
                            ->orderBy('nombre','ASC')
                            ->take(3)
                            ->get();   
        return view("indexConductores",compact('conductores'));
    }

    public function index()
    {
        

        $conductores = Conductores::All();   
        return view("indexConductores",compact('conductores'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('altaConductor');
        $estados = Estados::lists('nombreEstado', 'idEstado');
        return view('altaConductor',compact('estados'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    //Default
    //public function store(Request $request)
    //Con Validación de Requerimientos en la petición
    public function store(StoreConductorPostRequest $request)
    {

        //return $request['nombreC'];
        $passwordHashh = Hash::make($request['passwordC']);
        
       \Uber\Conductores::create([

        'nombre' => $request['nombreC'],
        'aPaterno' => $request['aPaternoC'],
        'aMaterno' => $request['aMaternoC'],
        'idEstado' => $request['stateC'],
        'telefono' => $request['telefono'],
        'fotografia' => 'http://www.google.com/img.png',
        'usuarioC' => $request['usuarioC'],
        //'passwordC' => $request['passwordC'],
        'passwordC' => $passwordHashh,
        ]);

        return ("inserción exitosa usuarios");
        
       
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