@extends('layouts.app-master')

@section('content')
@auth
<div class="container d-flex justify-content-center align-items-center" style="min-height: 10vh;">
    <div class="card p-4 shadow" style="width: 40rem;">
        <h3 class="text-center">Add Student</h3>
        <form method="POST" action="{{ route('students.store') }}">
            @csrf
            <div class="form-group">
                <label for="nombre">Name: </label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <br>
            <div class="form-group">
                <label for="apellidos">Last name: </label>
                <input type="text" class="form-control" id="apellidos" name="apellidos">
            </div>
            <br>
            <div class="form-group">
                <label for="fecha_nacimiento">Date of birth: </label>
                <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento">
            </div>
            <br>
            <div class="form-group">
                <label for="carrera_id">Career: </label>
                <select class="form-control" id="carrera_id" name="carrera_id">
                    @foreach($careers as $career)
                        <option value="{{ $career->id }}">{{ $career->nombreCarrera }}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="estatus">Status: </label>
                <select class="form-control" id="estatus" name="estatus">
                    <option value="Inscrito">Inscrito</option>
                    <option value="No Inscrito">No Inscrito</option>
                </select>
            </div>
            <br>

            <div class="text-center mt-4">
            <button type="submit" class="btn btn-green w-50 my-2 ">Submit</button>
            </div>
            <a href="{{ url()->previous() }}" class="btn btn-secondary position-fixed bottom-0 end-0 m-4">Back</a>
        </form>
    </div>
</div>
@endauth
@endsection

@guest
<p class="text-center mt-4">To see all content please <a href="/login">Log In</a></p>
@endguest