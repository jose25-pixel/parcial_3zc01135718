
@extends('layout.app')
@section('title', 'curso')

@section('content')


   <div class="container text-center">
    <h1 class="text-center text-dark py-3">Sección de cursos</h1>
    <div class="row">
        <div class="col-12 col-md-12
         text-center">
            <div class="card">
                <div class="card-header">
                    <h4>Agregar curso</h4>
                </div>
                <div class="card-body text-center">
                    <form class="bg-primary shadow rounded py-3 px-4 text-center" action="{{ route('curso.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input name="nombreCurso" type="text" placeholder="Nombre del curso" class="form-control @error('nombreCurso') is-invalid @enderror">

                        </div>
                        <div class="form-group">
                            <input name="year" type="number" min="1" placeholder="Año" class="form-control @error('year') is-invalid @enderror">
                        </div>
                        <div class="form-group">
                            <input name="ciclo" type="number" min="1" max="2" placeholder="Ciclo" class="form-control @error('ciclo') is-invalid @enderror">
                        </div>
                        <div class="form-group">
                            <select name="user_id" class="form-control @error('user_id') is-invalid @enderror">
                                <option value="">Profesores</option>
                                @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->nombre." ".$user->apellido }}</option>

                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success">Guardar curso</button>
                    </form>
                </div>
            </div>

    </div>
</div>
@endsection