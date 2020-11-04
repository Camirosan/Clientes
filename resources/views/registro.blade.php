@extends('plantilla')

@section('cuerpo')
    {{-- <h1>Vista de registro</h1> --}}

    @if('session'('mensaje'))
        <div class='alert alert-success'>
            {{ session('mensaje') }}
        </div>
    @endif
    <div class="container mt-4 card card-header">
        <h2>Ingresa los datos del cliente nuevo</h2>
    </div>
    <div class="container card card-body">
    <form action="{{ route('clietnes.crear') }}" method="post">
        @csrf
        @error('nombre')
            <div class="alert alert-danger">
                Favor introducil el nombre
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @enderror
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="nombre">Nombre</span>
            </div>
            <input name="nombre" value="{{ old('nombre') }}" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        @error('correo')
            
        @enderror
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="correo">Correo</span>
            </div>
                <input name="correo" value="{{ old('correo') }}" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        
        @error('telefono')
            
        @enderror
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="telefono">Telefono</span>
            </div>
                <input name="telefono" value="{{ old('telefono') }}" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        @error('celular')
            <div class="alert alert-danger">
                Favor introducil el número celular
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @enderror
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="celular">Celular</span>
            </div>
                <input name="celular" value="{{ old('celular') }}" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Whatsapp</label>
            </div>
            <select name="whatsapp" value="{{ old('whatsapp') }}" class="custom-select" id="inputGroupSelect01">
            <option selected>Si</option>
            <option value="1">No</option>
            </select>
        </div>

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Dirección</span>
            </div>
            <textarea name="direccion" class="form-control" aria-label="With textarea">{{{ old('direccion') }}}</textarea>
        </div>
        <button class="btn btn-primary btn-block mt-3 " type="submit">Registrar</button>

    </form>
    </div>
@endsection