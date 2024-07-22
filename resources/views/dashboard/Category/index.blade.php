@extends('dashboard.master')
@section('titulo','Categorias')
@include('layouts/navigation')
@section('contenido')
<main>
    
<div>
<h1>Listado de categorias</h1>
<br>
<a href="{{url('dashboard/category/create')}}" class="btn btn-outline-primary">Nueva categoria</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Id categoria</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Estado</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($category as $category)
        <tr>
            <td scope="row">{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            <td>{{ $category->description }}</td>
            <td>{{ $category->state ? __('activo') : __('inactivo') }}</td>
            <td><a href="{{ url('dashboard/category/'.$category->id.'/edit') }}" class="bi bi-pen"></a></td>
            <td>
                <form action="{{ url('dashboard/category/'.$category->id) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button class="bi bi-trash3-fill" type="submit"></button>
                </form>
            </td>
        </tr>
        <tr>
            <td scope="row"></td>
            <td></td>
            <td></td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>

</main>
@endsection