
@extends('layouts.app')

@section('content')





<a href="{{ route('cliente.create') }}" class="btn btn-success">Crear Cliente</a>




<table class="table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Fecha de Nacimiento</th>
            <th>Fecha de Creación</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
            <tr>
                <td>{{ $cliente->Nombre }}</td>
                <td>{{ $cliente->Apellido }}</td>
                <td>{{ $cliente->Fecha_Nac }}</td>
                <td>{{ $cliente->created_at }}</td>

                 <td>


                    <a href="{{ route('cliente.edit', ['item' => $cliente->Id_Cliente] )}}" class="btn btn-primary">Editar</a>
                  
                    <form action="{{ route('cliente.delete', ['item' => $cliente->Id_Cliente ] )}}" method="POST" style="display: inline-block;">
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

