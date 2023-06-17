@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="mt-5 text-center">Bienvenido a la pantalla de inicio</h1>

    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title">Información de los Integrantes</h5>

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Grupo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($integrantes as $integrante)
                        <tr>
                            <td>{{ $integrante['nombre'] }}</td>
                            <td>{{ $integrante['apellido'] }}</td>
                            <td>{{ $integrante['grupo'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



                
                </div>
            </div>
        </div>
    </div>
</div>


 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
