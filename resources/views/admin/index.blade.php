@extends('layout.app')
@section('title','Usuarios')
@section('content')
<div class="container">
    <div class="d-flex justify-content-between">
        <h2>Usuarios en el sistema </h2>
        <a class="btn btn-success mb-3" href="{{ route('user.create') }}">Agregar+ </a>
    </div>
    <table class="table table-responsive-sm table table-hover" id="table_usuario">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Nombre completo</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>DUI</th>
                <th>Rol</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->nombre." ".$user->apellido }}</td>
                <td>{{ $user->telefono }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->dui }}</td>
                <td>{{ $user->role->role }}</td>
                <td>
                    <div class="row">
                        <a href="{{ route('user.edit',$user) }}" class="btn btn-info btn-sm mx-2"><i class="fas fa-user-tie"></i></a>
                        <form id="delete-user" action="{{ route('user.destroy',$user->id) }}" method="POST">
                            @csrf @method('DELETE')
                            <button class="btn btn-outline-danger btn-sm" type="submit"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
                
            @endforelse
        </tbody>
    </table>
</div>
@endsection