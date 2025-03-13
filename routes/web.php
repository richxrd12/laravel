<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\Mail\Mailable;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
//View principal (Landing page)
Route::get('/', function () {
    return view('index');
});


Route::get('mail', function () {
    \Illuminate\Support\Facades\Mail::to('sercacsal2@gmail.com')->queue(new \App\Mail\Mail());
    return 'Done';
});

//Auth
Route::get('/register', [RegisterUserController::class, 'create']);
Route::post('/register', [RegisterUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);

//Home
Route::get('/home', [HomeController::class, 'index']);


//Blog específico
Route::get('/blog/{id}', [BlogController::class, 'index']);
Route::delete('/blog/{id}', [BlogController::class, 'destroy']);
Route::patch('/blog/{id}', [BlogController::class, 'update']);

//Ruta para editar
Route::get('/blog/{id}/edit', [BlogController::class, 'show']);

//Ruta para añadir
Route::get('/add', [BlogController::class, 'create']);
Route::post('/blog/add', [BlogController::class, 'store']);

//Ruta para listar todos los blogs
Route::get('/blogs', [BlogController::class, 'list']);
