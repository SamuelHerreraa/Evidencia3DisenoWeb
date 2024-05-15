@extends('layouts.login-master')

@section('content')
<div class="container">
    <div class="text-center mt-5">
        <h1>Welcome to my application</h1>
        <div class="mt-4">
            <a href="/register" class="btn btn-primary btn-lg mr-3">Register</a>
            <a href="/login" class="btn btn-secondary btn-lg">Login</a>
        </div>
    </div>
</div>

<style>
    .btn-lg {
        width: 150px; /* Cambia el valor según tu preferencia */
    }
</style>
@endsection
