@extends('layouts.app-master')

@section('content')
@auth
<div class="container d-flex justify-content-center align-items-center" style="min-height: 10vh;">
    <div class="card p-4 shadow" style="width: 40rem;">
        <h3 class="text-center">Add Career</h3>
        <form method="POST" action="{{ route('careers.store') }}">
            @csrf
            <div class="form-group">
                <label for="nombre_carrera">Career Name:</label>
                <input type="text" class="form-control" id="nombre_carrera" name="nombre_carrera">
            </div>
            <br>
            <div class="form-group">
                <label for="descripcion">Description:</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
            </div>
            <br>
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-green w-50 my-2">Submit</button>
            </div>
            <a href="{{ url('/home') }}" class="btn btn-secondary position-fixed bottom-0 end-0 m-4">Back</a>
        </form>
    </div>
</div>
@endauth
@endsection

@guest
<p class="text-center mt-4">To see all content please <a href="/login">Log In</a></p>
@endguest