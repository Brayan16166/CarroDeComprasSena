@extends('dashboard.master')
@section('titulo', 'Personas')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
    <h1 class="mb-4">Modificar persona</h1>
    <form action="{{ url('dashboard/person/' .$person->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group row">
            <label for="type" class="col-sm-2 col-form-label">Tipo</label>
            <div class="col-sm-10">
                <select class="form-control" name="type" id="type" required>
                    <option value="Persona Natural" {{ $person->type == 'Persona Natural' ? 'selected' : '' }}>Persona Natural</option>
                    <option value="Empresa" {{ $person->type == 'Empresa' ? 'selected' : '' }}>Empresa</option>
                    <option value="Proveedor" {{ $person->type == 'Proveedor' ? 'selected' : '' }}>Proveedor</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="First_Name" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="First_Name" id="First_Name" value="{{ $person->First_Name }}" placeholder="Nombre">
            </div>
        </div>
        <div class="form-group row">
            <label for="Last_Name" class="col-sm-2 col-form-label">Apellido</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Last_Name" id="Last_Name" value="{{ $person->Last_Name }}" placeholder="Apellido">
            </div>
        </div>
        <div class="form-group row">
            <label for="Document_Type" class="col-sm-2 col-form-label">Tipo de Documento</label>
            <div class="col-sm-10">
                <select class="form-control" name="Document_Type" id="Document_Type">
                    <option value="CC" {{ $person->Document_Type == 'CC' ? 'selected' : '' }}>CC</option>
                    <option value="TI" {{ $person->Document_Type == 'TI' ? 'selected' : '' }}>TI</option>
                    <option value="Pasaporte" {{ $person->Document_Type == 'Pasaporte' ? 'selected' : '' }}>Pasaporte</option>
                    <option value="Nit" {{ $person->Document_Type == 'Nit' ? 'selected' : '' }}>Nit</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="Document_Number" class="col-sm-2 col-form-label">Número de Documento</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Document_Number" id="Document_Number" value="{{ $person->Document_Number }}" placeholder="Número de Documento">
            </div>
        </div>
        <div class="form-group row">
            <label for="Adress" class="col-sm-2 col-form-label">Dirección</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Adress" id="Adress" value="{{ $person->Adress }}" placeholder="Dirección">
            </div>
        </div>
        <div class="form-group row">
            <label for="Phone" class="col-sm-2 col-form-label">Teléfono</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Phone" id="Phone" value="{{ $person->Phone }}" placeholder="Teléfono">
            </div>
        </div>
        <div class="form-group row">
            <label for="Email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="Email" id="Email" value="{{ $person->Email }}" placeholder="Email">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-success">Actualizar</button>
                <a href="{{ url('dashboard/person') }}" class="btn btn-secondary">Regresar</a>
            </div>
        </div>
    </form>
</div>
@endsection
