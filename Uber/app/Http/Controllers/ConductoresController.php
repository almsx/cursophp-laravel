<?php
namespace Uber\Http\Controllers;
use Illuminate\Http\Request;
use Uber\Http\Requests\StoreConductorPostRequest;
use Uber\Http\Requests;
use Uber\Conductores;
use Uber\Estados;
//Password Hash
use Illuminate\Support\Facades\Hash;
use Uber\Conductor;
use Redirect;
use Session;
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
        
        //Mostrar todos los Conductores
        $conductores = Conductores::All();   
        //Paginar Resultados
        $conductores = Conductores::paginate(1);
        return view("indexConductores",compact('conductores'));
        //return view('loginConductores');
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

        $passwordHashh = Hash::make($request['passwordC']);
        
        Conductores::create([
            'nombre' => $request['nombre'],
            'aPaterno' => $request['aPaterno'],
            'aMaterno' => $request['aMaterno'],
            'idEstado' => $request['stateC'],
            'telefono' => $request['telefono'],
            'fotografia' => 'http://www.google.com/img.png',
            'usuarioC' => $request['usuarioC'],
            'passwordC' => $passwordHashh,
        ]);

        Session::flash('message','Conductor fue registrado exitosamente.');
        return Redirect::to('/conductores');
        
       
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
    public function edit($idConductor)
    {

        $estados = Estados::lists('nombreEstado', 'idEstado');
        // return view('altaConductor',compact('estados'));
        $conductor = Conductores::find($idConductor);
        return view('editConductor', ['conductor'=>$conductor], compact('estados'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idConductor)
    {
        $conductor = Conductores::find($idConductor);
        $conductor->fill($request->all());
        $conductor->save();

        Session::flash('message','Conductor fue actualizado exitosamente.');
        return Redirect::to('/conductores');
    }
    
    public function destroy($idConductor){
        Conductores::destroy($idConductor);
        Session::flash('message','Conductor fue eliminado exitosamente.');
        return Redirect::to('/conductores');

    }
}