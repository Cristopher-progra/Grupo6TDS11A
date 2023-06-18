@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center">
  <form class="col-sm-6" action="{{ route('cliente.update', ['item' => $cliente->Id_Cliente]) }}" method="POST" >
    @csrf
    @method('PUT')

    <div class="form-group row">
      <label for="exampleInputEmail1" class="col-sm-3 col-form-label">Nombre</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre" name="nombrecliente" value="{{ $cliente->Nombre }}">
      </div>
    </div>

    <br>

    <div class="form-group row">
      <label for="exampleInputEmail1" class="col-sm-3 col-form-label">Apellido</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Apellido"  name="apellidocliente" value="{{ $cliente->Apellido }}">
      </div>
    </div>

    <br>

    <div class="form-group row">
      <label for="exampleInputPassword1" class="col-sm-3 col-form-label">Fecha de Nacimiento</label>
      <div class="col-sm-9">
        <input type="date" class="form-control" id="exampleInputPassword1" name="fechacliente" value="{{ $cliente->Fecha_Nac }}">
      </div>
    </div>

    <div class="form-group row">
      <div class="col-sm-9 offset-sm-3">
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check</label>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-9 offset-sm-3">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
</div>

@endsection
