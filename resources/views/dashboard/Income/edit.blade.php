@extends('dashboard.master')
@section('titulo','Ingresos')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
    <h1 class="mb-4">Modificar ingreso</h1>
    <form action="{{ url('dashboard/income/' . $income->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group row">
            <label for="provider_id" class="col-sm-2 col-form-label">Proveedor</label>
            <div class="col-sm-10">
                <select name="provider_id" id="provider_id" class="form-select" required>
                    <option value="">Seleccionar Proveedor</option>
                    @foreach($person as $person)
                    <option value="{{ $person->id }}" {{ $income->provider_id == $person->id ? 'selected' : '' }}>{{ $person->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="user_id" class="col-sm-2 col-form-label">Usuario</label>
            <div class="col-sm-10">
                <select name="user_id" id="user_id" class="form-select" required>
                    <option value="">Seleccionar Usuario</option>
                    @foreach($user as $user)
                    <option value="{{ $user->id }}" {{ $income->user_id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="receipt_type" class="col-sm-2 col-form-label">Tipo de Recibo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="receipt_type" id="receipt_type" value="{{ $income->receipt_type }}" placeholder="Tipo de Recibo">
            </div>
        </div>
        <div class="form-group row">
            <label for="receipt_series" class="col-sm-2 col-form-label">Serie de Recibo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="receipt_series" id="receipt_series" value="{{ $income->receipt_series }}" placeholder="Serie de Recibo">
            </div>
        </div>
        <div class="form-group row">
            <label for="receipt_number" class="col-sm-2 col-form-label">Número de Recibo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="receipt_number" id="receipt_number" value="{{ $income->receipt_number }}" placeholder="Número de Recibo">
            </div>
        </div>
        <div class="form-group row">
            <label for="date" class="col-sm-2 col-form-label">Fecha</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="date" id="date" value="{{ $income->date }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="tax" class="col-sm-2 col-form-label">Impuesto</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="tax" id="tax" value="{{ $income->tax }}" placeholder="Impuesto">
            </div>
        </div>
        <div class="form-group row">
            <label for="total" class="col-sm-2 col-form-label">Total</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="total" id="total" value="{{ $income->total }}" placeholder="Total">
            </div>
        </div>
        <div class="form-group row">
            <label for="status" class="col-sm-2 col-form-label">Estado</label>
            <div class="col-sm-10">
                <select class="form-control" name="status" id="status">
                    <option value="activo" {{ $income->status == 'activo' ? 'selected' : '' }}>Activo</option>
                    <option value="inactivo" {{ $income->status == 'inactivo' ? 'selected' : '' }}>Inactivo</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-success">Actualizar</button>
                <a href="{{ url('dashboard/income') }}" class="btn btn-secondary">Regresar</a>
            </div>
        </div>
    </form>
</div>
@endsection
