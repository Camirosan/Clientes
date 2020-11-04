@extends('plantilla')


@section('cuerpo')
    {{-- <h1>Vista de cientes</h1> --}}
    <div class="container mt-4 card card-header">
        <form action="{{ route('clientes.buscar') }}" method="post">
            @error('nombre')
            <div class="alert alert-danger">
                Favor introducir el nombre
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @enderror
            <div class="input-group mb-3">
                @csrf
                <div class="input-group-prepend">
                    <span class="input-group-text" >Nombre</span>
                </div>
            <input name="nombre" value="{{ $cliente->nombre ?? '' }}" type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="button-addon2">
                <div class="input-group-append">
                <button class="input-group-text" type="submit" id="buscar">Buscar</button>
                </div>
            </div>
        </form>
    </div>
    <div class="container card card-body">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="correo">Correo</span>
            </div>
                <input value="{{ $cliente->correo ?? '' }}" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" readonly>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="telefono">Telefono</span>
            </div>
                <input value="{{ $cliente->telefono ?? '' }}" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" readonly>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="celular">Celular</span>
            </div>
                <input value="{{ $cliente->celular ?? '' }}" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" readonly>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Whatsapp</label>
            </div>
            <input value="{{ $cliente->whatsapp ?? '' }}" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" readonly>
        </div>

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Dirección</span>
            </div>
            <textarea class="form-control" aria-label="With textarea" readonly>{{ $direccion->direccion ?? '' }}</textarea>
        </div>
    </div>
@endsection