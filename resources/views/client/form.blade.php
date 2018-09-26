@extends('layouts.app')

@section('content')
  <center><h5>@if($client) Editar Cliente @else Nuevo Cliente @endif</h5></center>
  <div class="container">
    <form>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="name">Nombre</label>
              <input type="text" class="form-control" id="name" placeholder="Nombre" value="">
        </div>
        <div class="form-group col-md-6">
          <label for="url">Ruta:</label>
          <input type="text" class="form-control" id="url" placeholder="Ruta">
        </div>
      </div>
    </form>


    aqui se agrega un tabla en jquery para agregar las compañias



    <div class="footer-page">
        <button type="button" class="btn btn-primary btn-sm">Guardar</button>
        <a type="button" class="btn btn-secondary btn-sm" href="{{ url('/client')}}">Cancelar</a>
    </div>

  </div>
@endsection