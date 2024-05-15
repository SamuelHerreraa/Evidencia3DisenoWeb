<!-- web.php -->
<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\CareerController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/register', [RegisterController::class, 'show']);

Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'show']);

Route::post('/login', [LoginController::class, 'login']);

Route::get('/home', [HomeController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/logout', [LogoutController::class, 'logout']);

Route::get('/landingpage', [LandingpageController::class, 'index']);





Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/students', [StudentController::class, 'store'])->name('students.store');

Route::get('/students', [StudentController::class, 'index'])->name('students.index');




Route::get('/careers/create', [CareerController::class, 'create'])->name('careers.create');
Route::post('/careers', [CareerController::class, 'store'])->name('careers.store');
Route::get('/careers', [CareerController::class, 'index'])->name('careers.index');


Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');
Route::delete('/careers/{id}', [CareerController::class, 'destroy'])->name('careers.destroy');




