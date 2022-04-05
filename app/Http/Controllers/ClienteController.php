<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $clientes = Cliente::all();
        return view('cliente.index')->with('clientes', $clientes);
       
        
    }
    
  
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('cliente.create');
    }

    

   

  


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //Enviamos los datos de cada cliente utilizando 
    // una nueva instancia de la clase clientes y guardamos en base de datos utilziando save.
    public function store(Request $request)
    {
        $clientes = new  Cliente();
        $clientes-> nombre = $request->get('nombre');
        $clientes-> imagen = $request->get('imagen');
        $clientes-> tipo = $request->get('tipo');
        $clientes-> cedula = $request->get('cedula');
        $clientes-> correo = $request->get('correo');
        $clientes-> telefono = $request->get('telefono');
        $clientes-> fechainicio = $request->get('fechainicio');
        $clientes-> fechafin = $request->get('fechafin');
        $clientes-> observaciones = $request->get('observaciones');

        $clientes->save();

        return redirect('/clientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Cliente::find($id);
        return view('cliente.show')->with('cliente', $cliente);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('cliente.edit')->with('cliente', $cliente);
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
        $cliente = Cliente::find($id);

        $cliente-> nombre = $request->get('nombre');
        $cliente-> imagen = $request->get('imagen');
        $cliente-> tipo = $request->get('tipo');
        $cliente-> cedula = $request->get('cedula');
        $cliente-> correo = $request->get('correo');
        $cliente-> telefono = $request->get('telefono');
        $cliente-> fechainicio = $request->get('fechainicio');
        $cliente-> fechafin = $request->get('fechafin');
        $cliente-> observaciones = $request->get('observaciones');

        $cliente->save();

        return redirect('/clientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Ruta para eliminar cliente
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();

        return redirect('/clientes');
    }
}
