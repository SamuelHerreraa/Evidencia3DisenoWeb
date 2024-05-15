@extends('layouts.login-master')

@section('content')
<div class="form-container">
    <form action="/register" method="POST">
        @csrf
        <h1>Register</h1>
        <br>
        @include('layouts.partials.messages')

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
        </div>

        <div class="text-center mt-4">
            <button type="submit" class="btn btn-green w-50 my-2 ">Submit</button>
        </div>

        <div class="text-end mt-3">
            <a href="{{ url('/login') }}" class="btn btn-link">Back</a>
        </div>
    </form>
</div>
@endsection
