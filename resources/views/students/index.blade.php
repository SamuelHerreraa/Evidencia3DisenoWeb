@extends('layouts.app-master')

@section('content')
@auth
<div class="container">
    <h1>List of Students</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($students->isEmpty())
        <p>No students registered.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Last Name</th>
                    <th>Date of birth</th>
                    <th>Career</th>
                    <th>Status</th>
                    <th>Actions</th> <!-- Nuevo encabezado para las acciones -->
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->nombre }}</td>
                        <td>{{ $student->apellidos }}</td>
                        <td>{{ $student->fecha_nacimiento }}</td>
                        <td>{{ $student->carrera->nombreCarrera }}</td>
                        <td>{{ $student->estatus }}</td>
                        <td>
                            <!-- Botón de eliminar -->
                            <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
<a href="{{ url('/home') }}" class="btn btn-secondary position-fixed bottom-0 end-0 m-4">Back</a>
@endauth
@endsection

@guest
    <br>
    <br>
    <p>To see all content please <a href="/login">Log In</a></p>
@endguest
