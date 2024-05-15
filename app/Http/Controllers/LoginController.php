<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;


use App\Mail\AlertMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    public function show() {
        if(Auth::check()) {
            return redirect('/home');

        }
        return view("auth.login");
    }

    public function login(LoginRequest $request) {

        $credentials = $request->getCredentials();

        if(!Auth::validate($credentials))
        {
            return redirect()->to('/login')->withErrors(('email or password is incorrect'));
        }
        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return $this->authenticated($request, $user);
    }

    public function authenticated(Request $request, $user) {
        return $this->index();
    }

    public function index() {
        // Obtener el usuario autenticado
        $user = Auth::user();
            // Envía el correo al correo electrónico del usuario autenticado
            Mail::to($user->email)->send(new AlertMail());


        // Redirige a la página de inicio de sesión con un mensaje de éxito
        return redirect('/home');
    }

    

    

}
