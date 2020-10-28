@extends('plantilla')

@section('cuerpo')
    <h1>Vista de registro</h1>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="nombre">Nombre</span>
        </div>
            <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="correo">Correo</span>
        </div>
            <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="telefono">Telefono</span>
        </div>
            <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="celular">Celular</span>
        </div>
            <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect01">Whatsapp</label>
        </div>
        <select class="custom-select" id="inputGroupSelect01">
          <option selected>Si</option>
          <option value="1">No</option>
        </select>
      </div>

    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">Dirección</span>
        </div>
        <textarea class="form-control" aria-label="With textarea"></textarea>
    </div>
@endsection