<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\HelloMail;

class LandingpageController extends Controller
{
    public function index() {

        return view("home.landingpage");
    }
}