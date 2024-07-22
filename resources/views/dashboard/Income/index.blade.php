@extends('dashboard.master')
@section('titulo','Ingresos')
@include('layouts/navigation')
@section('contenido')
<main>
    <div>
        <h1>Listado de Ingresos</h1>
        <br>
        <a href="{{ url('dashboard/income/create') }}" class="btn btn-outline-primary">Nuevo Ingreso</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id Ingreso</th>
                    <th>Proveedor</th>
                    <th>Usuario</th>
                    <th>Tipo de Recibo</th>
                    <th>Serie de Recibo</th>
                    <th>Número de Recibo</th>
                    <th>Fecha</th>
                    <th>Impuesto</th>
                    <th>Total</th>
                    <th>Estado</th>
                    <th>Detalle</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($income as $income)
                <tr>
                    <td scope="row">{{ $income->id }}</td>
                    <td>{{ $income->person->name }}</td>
                    <td>{{ $income->user->name }}</td>
                    <td>{{ $income->receipt_type }}</td>
                    <td>{{ $income->receipt_series }}</td>
                    <td>{{ $income->receipt_number }}</td>
                    <td>{{ $income->date }}</td>
                    <td>{{ $income->tax }}</td>
                    <td>{{ $income->total }}</td>
                    <td>{{ $income->status }}</td>
                    <td><a href="{{ url('dashboard/income/'.$income->id.'/') }}" class="bi bi-info-lg"></a></td>
                    <td><a href="{{ url('dashboard/income/'.$income->id.'/edit') }}" class="bi bi-pen"></a></td>
                    <td>
                        <form action="{{ url('dashboard/income/'.$income->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="bi bi-trash3-fill" type="submit"></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection