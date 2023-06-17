@extends('layouts.app')

@section('content')


<div class="d-flex justify-content-center">
  <form class="col-sm-6" action="{{ route('pedido.update' , ['item' => $pedidoelegir->Id_Pedido]) }}" method="POST" >
    @csrf
    @method('PUT')
    <div class="form-group row">
      <label for="exampleInputEmail1" class="col-sm-3 col-form-label">Fecha Pedido</label>
      <div class="col-sm-9">
        <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{ $pedidoelegir->FechaPedido}}" name="fechapedido">
      </div>
    </div>


<br>
    <div class="form-group row">
      <label for="exampleInputEmail1" class="col-sm-3 col-form-label">Fecha Entrega</label>
      <div class="col-sm-9">
        <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{ $pedidoelegir->FechaEntrega }}"  name="fechaentrega">
      </div>
    </div>

<br>
 

 <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Options</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01" name="relacioncliente">
  @php
  use App\Models\Client;

    $client = new Client();
    $clientData = $client->find($pedidoelegir->Id_Cliente);
@endphp

    <option value="{{ $pedidoelegir->Id_Cliente}}">{{  $clientData->Nombre }}</option>

    @foreach ($clientes as $cliente)
            <option value="{{ $cliente->Id_Cliente }}">{{ $cliente->Nombre }}</option>
    @endforeach
  </select>
</div>

<br>
 

    <div class="form-group row">
      <label for="exampleInputEmail1" class="col-sm-3 col-form-label">Observaciones</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{ $pedidoelegir->Observaciones }}"  name="observacion">
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


