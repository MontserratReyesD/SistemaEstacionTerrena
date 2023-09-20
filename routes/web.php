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
//Recuerda el use al inicio para que encuentre al controlador
//Ejemplo: use App\Http\Controllers\formularioController;
/*
Route::get('/productos', [formularioController::class, 'index']);//Recuerda el use al inici
Route::get('/form', [formularioController::class, 'create']);
Route::post('/form/save', [formularioController::class, 'store'])->name('producto.guardar');

Route::get('/consumo/crcind/demo', [soapController::class, 'consumirServicio']);//Recuerda el use al inici

Route::get('/cliente/temperatura', [clienteTemperaturaSOAPController::class, 'consumirTemperatura']);

Route::any('/servidor/temperatura', function() {
    //$this->middleware('verifyCsrfToken'); 
    $soapServer = new SoapServer('http://127.0.0.1/misServiciosSOAP/ctof.wsdl', array('uri' => 'http://localhost/telepuertoV1L10/public/servidor/temperatura'));
    $soapServer->setClass(servidorTemperaturaSOAPController::class);
    $soapServer->handle();
});
Route::get('/cliente/py', [pySOAPController::class, 'consumirServicioPy']);
Route::get('/crer/wsdl/ajua', [creadorWSDL::class, 'crearWSDL']);
//Consumo REST
Route::get('/gatos/aletorios', [consumoRestController::class, 'index'])->name('aletorios');;
Route::get('/gatos/favoritos', [consumoRestController::class, 'favoritos'])->name('album');;

//API REST 
Route::get('/index', [PostController::class, 'index']);
*/
    //Tablero
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

//Usuarios
/*
Route::group(['prefix' => 'usuarios','middleware' => ['auth']], function() {
    Route::get('mostrar', ['as' => 'usuario.mostrar', 'uses' => 'UserController@index']);
    Route::get('nuevo', ['as' => 'usuario.nuevo', 'uses' => 'UserController@create']);
    Route::post('guardar', ['as' => 'usuario.guardar', 'uses' => 'UserController@store']);
    Route::get('{id}/modificar', ['as' => 'usuario.modify', 'uses' => 'UserController@edit']);
    Route::post('{id}/update', ['as' => 'usuario.update', 'uses' => 'UserController@update']);
});
*/