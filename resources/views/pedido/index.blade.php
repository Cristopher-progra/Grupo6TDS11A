
@extends('layouts.app')

@section('content')






<a href="{{ route('pedido.create') }}" class="btn btn-success">Crear Pedido</a>




<table class="table">
    <thead>
        <tr>
            <th>Numero</th>
            <th>Fecha del Pedido</th>
            <th>Fecha de Entrega</th>
            <th>Observaciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($todoslospedidos as $pedido)
            <tr>
                
                <td>{{ $pedido->Id_Pedido }}</td>
                <td>{{ $pedido->FechaPedido }}</td>
                <td>{{ $pedido->FechaEntrega }}</td>
                <td>{{ $pedido->Observaciones }}</td>


                 <td>


                    <a href="{{ route('pedido.edit', ['item' => $pedido->Id_Pedido] )}}" class="btn btn-primary">Editar</a>
                  
                    <form action="{{ route('pedido.delete', ['item' => $pedido->Id_Pedido ] )}}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>










@endsection

