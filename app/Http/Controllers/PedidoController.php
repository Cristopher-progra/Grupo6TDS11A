<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Order;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedido =  new Order();
        $todoslospedidos = $pedido->all(); 

        
        return view('pedido.index' , compact('todoslospedidos')); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   

        $client = new Client(); // Obtén todos los clientes
        $clientes = $client->all(); 
        return view('pedido.create' , compact('clientes'));  

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
            'fechapedido' => 'required',
            'fechaentrega' => 'required',
            'relacioncliente' => 'required',
            'observacion' => 'required',
        ]);

        // Crear un nuevo objeto de pedido con los datos del formulario
        $pedido = new Order();
        $pedido->FechaPedido = $request->input('fechapedido');
        $pedido->FechaEntrega = $request->input('fechaentrega');
        $pedido->Id_Cliente = $request->input('relacioncliente');
        $pedido->Observaciones = $request->input('observacion');
        $pedido->save();

        // Redireccionar a la página adecuada después de almacenar el pedido
        return redirect()->route('pedido.index');
       
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
        $pedido = new Order(); 
        
        $pedidoelegir = $pedido->find($id) ;
        

        
        $client = new Client(); // Obtén todos los clientes
        $clientes = $client->all(); 
        
        return view( 'pedido.edit' , compact('pedidoelegir' , 'clientes' ) ); 
        
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
        
    // Obtener el pedido a actualizar
    $pedido = Order::find($id);
    
    // Actualizar los campos del pedido con los datos del formulario
    $pedido->FechaPedido = $request->input('fechapedido');
    $pedido->FechaEntrega = $request->input('fechaentrega');
    $pedido->Id_Cliente = $request->input('relacioncliente');
    $pedido->Observaciones = $request->input('observacion');
    
    // Guardar los cambios en la base de datos
    $pedido->save();
    
    // Redireccionar a la vista de detalles del pedido actualizado
    //return redirect()->route('pedido.show', ['item' => $pedido->Id_Pedido]);

    return redirect()->route('pedido.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pedido = Order::findOrFail($id);


        $pedido->delete();
    
        // Redirecciona a la página adecuada después de eliminar el cliente
            // Redirecciona a la página adecuada después de eliminar el cliente
        return redirect()->route('pedido.index');
    }
}
