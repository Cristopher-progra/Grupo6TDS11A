<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cliente = new Client();
        $clientes = $cliente->all(); // Obtener todos los registros de clientes
    
        return view('client.clientList', compact('clientes')); // Pasar la variable $clientes a la vista
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        return view('client.clienteCreate');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombrecliente' => 'required',
            'apellidocliente' => 'required',
            'fechacliente' => 'required',
        ]);

        
        // Crear un nuevo objeto de cliente con los datos del formulario
        $cliente = new Client();
        $cliente->Nombre = $request->input('nombrecliente');
        $cliente->Apellido = $request->input('apellidocliente');
        $cliente->Fecha_Nac = $request->input('fechacliente');
        $cliente->save();

        // Redireccionar a la página adecuada después de almacenar el cliente
        return redirect()->route('cliente.index');


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
        $cliente = Client::findOrFail($id);

    // Aquí puedes realizar cualquier operación adicional que necesites antes de mostrar la vista de edición

    return view('client.clieteedit', compact('cliente'));
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
        
    // Validar los datos del formulario
    $request->validate([
        'nombrecliente' => 'required',
        'apellidocliente' => 'required',
        'fechacliente' => 'required',
    ]);

    // Buscar el cliente a actualizar
    $cliente = Client::findOrFail($id);

    // Actualizar los campos del cliente con los datos del formulario
    $cliente->Nombre = $request->input('nombrecliente');
    $cliente->Apellido = $request->input('apellidocliente');
    $cliente->Fecha_Nac = $request->input('fechacliente');
    $cliente->save();

    // Redireccionar a la página adecuada después de actualizar el cliente
     return redirect()->route('cliente.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    $cliente = Client::findOrFail($id);

    // Eliminar los pedidos asociados al cliente
    $cliente->pedidos()->delete();

    $cliente->delete();

    // Redirecciona a la página adecuada después de eliminar el cliente
        // Redirecciona a la página adecuada después de eliminar el cliente
        return redirect()->route('cliente.index');

    }
}
