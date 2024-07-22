@extends('dashboard.master')
@section('titulo','Personas')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
    <h1 class="mb-4">Crear nueva persona</h1>
    <form action="{{ route('person.store') }}" method="post">
        @csrf
        <div class="form-group row">
            <label for="type" class="col-sm-2 col-form-label">Tipo</label>
            <div class="col-sm-10">
                <select name="type" id="type" class="form-control" required>
                    <option value="">Seleccionar Tipo</option>
                    <option value="Persona Natural">Persona Natural</option>
                    <option value="Empresa">Empresa</option>
                    <option value="Proveedor">Proveedor</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="First_Name" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="First_Name" id="First_Name" placeholder="Nombre" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="Last_Name" class="col-sm-2 col-form-label">Apellido</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Last_Name" id="Last_Name" placeholder="Apellido" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="Document_Type" class="col-sm-2 col-form-label">Tipo de Documento</label>
            <div class="col-sm-10">
                <select name="Document_Type" id="Document_Type" class="form-control">
                    <option value="">Seleccionar Tipo de Documento</option>
                    <option value="CC">Cédula de Ciudadanía (CC)</option>
                    <option value="TI">Tarjeta de Identidad (TI)</option>
                    <option value="Pasaporte">Pasaporte</option>
                    <option value="Nit">Número de Identificación Tributaria (Nit)</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="Document_Number" class="col-sm-2 col-form-label">Número de Documento</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Document_Number" id="Document_Number" placeholder="Número de Documento">
            </div>
        </div>
        <div class="form-group row">
            <label for="Adress" class="col-sm-2 col-form-label">Dirección</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Adress" id="Adress" placeholder="Dirección">
            </div>
        </div>
        <div class="form-group row">
            <label for="Phone" class="col-sm-2 col-form-label">Teléfono</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Phone" id="Phone" placeholder="Teléfono">
            </div>
        </div>
        <div class="form-group row">
            <label for="Email" class="col-sm-2 col-form-label">Correo Electrónico</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="Email" id="Email" placeholder="Correo Electrónico">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-success">Registrar</button>
                <a href="{{ url('dashboard/person') }}" class="btn btn-secondary">Regresar</a>
            </div>
        </div>
    </form>
</div>
@endsection
