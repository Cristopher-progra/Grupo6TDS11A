<!DOCTYPE html>
<html>
<head>
    <!-- Otros elementos head... -->

    <!-- Enlaces a los archivos CSS de Bootstrap -->
    <link rel="stylesheet" href="ruta/a/bootstrap.min.css">
    
    <!-- Otros enlaces a tus archivos CSS personalizados -->
</head>
<body>
    <!-- Contenido del cuerpo... -->


    


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











    <!-- Scripts JS de Bootstrap (requiere jQuery) -->
    <script src="ruta/a/jquery.min.js"></script>
    <script src="ruta/a/bootstrap.min.js"></script>
    
    <!-- Otros scripts JS personalizados -->
</body>
</html>


