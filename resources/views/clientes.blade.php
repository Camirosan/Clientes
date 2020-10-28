@extends('plantilla')


@section('cuerpo')
    <h1>Vista de cientes</h1>
    
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="nombre">Nombre</span>
        </div>
        <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="button-addon2">
        <div class="input-group-append">
          <button class="input-group-text" type="button" id="buscar">Buscar</button>
        </div>
      </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="correo">Correo</span>
        </div>
            <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" readonly>
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="telefono">Telefono</span>
        </div>
            <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" readonly>
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="celular">Celular</span>
        </div>
            <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" readonly>
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect01">Whatsapp</label>
        </div>
        <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" readonly>
      </div>

    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">Dirección</span>
        </div>
        <textarea class="form-control" aria-label="With textarea" readonly></textarea>
    </div>
@endsection