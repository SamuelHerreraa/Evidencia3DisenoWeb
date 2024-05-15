@extends('layouts.app-master')

@section('content')
<div class="container text-center">
    @auth
    <h1>Admin Panel</h1>
    <p>Welcome {{ auth()->user()->name }}</p>

    <!-- Mensaje de éxito -->
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <!-- Botones para ejecutar acciones -->
    <div class="d-flex flex-column align-items-center">
        <a href="{{ route('students.create') }}" class="btn btn-green w-50 my-2">Add Student</a>
        <a href="{{ route('careers.create') }}" class="btn btn-dark w-50 my-2">Add Career</a>
        <a href="{{ route('students.index') }}" class="btn btn-green w-50 my-2">See Students</a>
        <a href="{{ route('careers.index') }}" class="btn btn-dark w-50 my-2">See Careers</a>
    </div>
    @endauth

    @guest
    <br>
    <br>
    <p>To see all content please <a href="/login">Log In</a></p>
    @endguest
    
</div>
@endsection