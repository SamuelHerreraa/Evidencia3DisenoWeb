@extends('layouts.login-master')

@section('content')
<div class="form-container">
    <form action="/login" method="post">
        @csrf

        <div class="text-center mt-4">
        <img src="https://i.pinimg.com/originals/fd/12/47/fd1247e4740ea4d8c30dfd24103bd209.png" alt="Descripción de la imagen" style="width: 50%;">
        <h3 class="mb-4">Tecmilenio</h3>    
    </div>
        @include('layouts.partials.messages')

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <div class="text-center mt-4">
            <button type="submit" class="btn btn-green w-50 my-2 ">Log In</button>
            </div>

        <br>
        <div class="text-end">
            <a href="{{ url('/register') }}" class="btn btn-link">Sign Up</a>
        </div>
    </form>
</div>
@endsection