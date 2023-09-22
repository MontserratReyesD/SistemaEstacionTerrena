<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formularioController;
use App\Http\Controllers\soapController;
use App\Http\Controllers\servidorSOAPController;

use App\Http\Controllers\clienteTemperaturaSOAPController;
use App\Http\Controllers\servidorTemperaturaSOAPController;
use App\Http\Controllers\pySOAPController;
use App\Http\Controllers\creadorWSDL;
use App\Http\Controllers\consumoRestController;
use App\Http\Controllers\PostController;

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\monitorController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/boceto', [dashboardController::class, 'index'])->name('tablero');
Route::get('/login', function () {
    return "este es un login...";
})->name('login');;

Route::get('/home', function () {
    return "llegando a casa...";
})->name('home');;

Route::get('/register', function () {
    return "registrando...";
})->name('register');;


//monitorear variables
Route::get('/monitor', [monitorController::class, 'create'])->name('graficas');

Route::prefix('monitor')->group(function () {
    Route::get('mostrar', [monitorController::class, 'create'])->name('data.mostrar');
    Route::post('guardar', [monitorController::class, 'create'])->name('data.guardar');    
});

Route::get('/clima', function () {
    return view('graphics.extras.clima');
})->name('datos.clima');

