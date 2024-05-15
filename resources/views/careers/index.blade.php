@extends('layouts.app-master')

@section('content')
@auth
<div class="container">
    <h1>List of Careers</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($careers->isEmpty())
        <p>No careers registered.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Actions</th> <!-- Nuevo encabezado para las acciones -->
                </tr>
            </thead>
            <tbody>
                @foreach ($careers as $career)
                    <tr>
                        <td>{{ $career->nombreCarrera }}</td>
                        <td>{{ $career->descripcion }}</td>
                        <td>
                            <!-- Botón de eliminar -->
                            <form action="{{ route('careers.destroy', $career->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    <a href="{{ url('/home') }}" class="btn btn-secondary position-fixed bottom-0 end-0 m-4">Back</a>
</div>
@endauth
@endsection

@guest
    <br>
    <br>
    <p>To see all content please <a href="/login">Log In</a></p>
@endguest
