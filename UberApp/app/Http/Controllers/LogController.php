<?php

namespace Uber\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use Redirect;
use Uber\Http\Requests;
use Uber\Http\Requests\LoginRequest;


class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('login');
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LoginRequest $request)
    {
        
        //Ver si nos devuelve lo de cajas de texto
        //return "usuario " .$request->usuarioC;
        //return "password ".$request->passwordC;
        
        if(Auth::attempt(['usuarioC' => $request['usuarioC'], 'password' => $request['passwordC']])){
            //return Redirect::to('admin');
            return "exito";

        }

        return "error, el password ".$request->passwordC . " usuaio es ".$request->usuarioC;
        //*/
        
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
