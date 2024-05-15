<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use App\Mail\HelloMail;
use Illuminate\Support\Facades\Mail;


class RegisterController extends Controller
{
    public function show(){
        if(Auth::check()) {
            return redirect('/home');
        }
        return view("auth.register");
    }

    public function register(RegisterRequest $request){
        // Crea el usuario
        $user = User::create($request->validated());

        Mail::to($user->email)->send(new HelloMail());

        // Redirige a la página de inicio de sesión con un mensaje de éxito
        return redirect('/login')->with('success','Account created successfully');
    }

}
