<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route:: get('/formulario', function() {
    return view('formulario');
});

route:: get('/mensaje', function(){
    return view('mensaje');
});



Auth::routes();
Route::get('/formulario', [App\Http\Controllers\serpiente::class, 'Guardar'])->name('mensaje');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
