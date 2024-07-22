@extends('dashboard.master')
@section('titulo','Personas')
@include('layouts/navigation')
@section('contenido')
<main>
    
<div>
<h1>Listado de personas</h1>
<br>
<a href="{{ url('dashboard/person/create') }}" class="btn btn-outline-primary">Nueva persona</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Tipo</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Tipo de Documento</th>
            <th>Número de Documento</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Correo Electrónico</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($person as $person)
        <tr>
            <td scope="row">{{ $person->id }}</td>
            <td>{{ $person->type }}</td>
            <td>{{ $person->First_Name }}</td>
            <td>{{ $person->Last_Name }}</td>
            <td>{{ $person->Document_Type }}</td>
            <td>{{ $person->Document_Number }}</td>
            <td>{{ $person->Adress }}</td>
            <td>{{ $person->Phone }}</td>
            <td>{{ $person->Email }}</td>
            <td><a href="{{ url('dashboard/person/'.$person->id.'/edit') }}" class="bi bi-pen"></a></td>
            <td>
                <form action="{{ url('dashboard/person/'.$person->id) }}" method="post">
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
