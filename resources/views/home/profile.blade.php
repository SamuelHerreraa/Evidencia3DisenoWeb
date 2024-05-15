@extends('layouts.app-master')

@section('content')
<div class="container">
    <h1 class="mb-4">Profile</h1>

    @auth
    <div class="profile-info">
        <div class="mb-3">
            <strong>Your name is:</strong> {{ auth()->user()->name }}
        </div>
        <div class="mb-3">
            <strong>Your email is:</strong> {{ auth()->user()->email }}
        </div>
    </div>
    @else
        <br>
        <br>
        <p>To see all content please <a href="/login">Log In</a></p>
    @endauth

</div>

<style>
    .profile-info {
        background-color: #f8f9fa; /* Color de fondo */
        padding: 20px; /* Espaciado interno */
        border-radius: 10px; /* Bordes redondeados */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra */
    }

    .profile-info strong {
        font-weight: bold; /* Texto en negrita */
        color: #333; /* Color del texto */
    }

    .profile-info .mb-3 {
        margin-bottom: 15px; /* Espaciado inferior */
    }
</style>
@endsection
