@extends('layouts.app')

@section('content')


<div class="d-flex justify-content-center">
  <form class="col-sm-6" action="{{ route('pedido.store') }}" method="POST" >
    @csrf

    <div class="form-group row">
      <label for="exampleInputEmail1" class="col-sm-3 col-form-label">Fecha Pedido</label>
      <div class="col-sm-9">
        <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre" name="fechapedido">
      </div>
    </div>


<br>
    <div class="form-group row">
      <label for="exampleInputEmail1" class="col-sm-3 col-form-label">Fecha Entrega</label>
      <div class="col-sm-9">
        <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Apellido"  name="fechaentrega">
      </div>
    </div>

<br>
 

 <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Options</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01" name="relacioncliente">
    @foreach ($clientes as $cliente)
            <option value="{{ $cliente->Id_Cliente }}">{{ $cliente->Nombre }}</option>
    @endforeach
  </select>
</div>

<br>
 

    <div class="form-group row">
      <label for="exampleInputEmail1" class="col-sm-3 col-form-label">Observaciones</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Observacion"  name="observacion">
      </div>
    </div>



    <br>
 
    <div class="form-group row">
      <div class="col-sm-9 offset-sm-3">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
</div>



@endsection


