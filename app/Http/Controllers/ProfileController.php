<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Mail\HelloMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ProfileController extends Controller
{
    public function index() {
        // Obtener el usuario autenticado
        //$user = Auth::user();
        
        // Verificar si el usuario está autenticado y tiene un correo electrónico
        //if ($user && $user->email) {
            // Envía el correo al correo electrónico del usuario autenticado
        //    Mail::to($user->email)->send(new HelloMail());
        //}

        return view("home.profile");
    }
}
