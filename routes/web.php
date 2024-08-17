<?php
//Importar Controladores
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\Login2Controller;
use App\Http\Controllers\MisionVisionController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ShipmentController;

Route::get('/', function () {
    return view('csvimport');
});


//Rutas para las visats
Route::get('inicio', [InicioController::class, 'index']);
Route::get('productos',[ProductosController::class, 'index']);
Route::get('login',[Login2Controller::class, 'index']);
Route::get('misionvision',[MisionVisionController::class, 'index']);
Route::get('signup',[SignUpController::class, 'index']);
Route::get('about',[AboutController::class, 'index']);
Route::get('shipment',[ShipmentController::class, 'index']);

//Nombres de rutas para poder redirigir 

Route::get('signup', [SignUpController::class, 'index'])->name('signup.index');
Route::get('login', [Login2Controller::class, 'index'])->name('login.index');
Route::get('inicio', [InicioController::class, 'index'])->name('inicio.index');
Route::get('productos',[ProductosController::class, 'index'])->name('productos.index');
Route::get('misionvision',[MisionVisionController::class, 'index'])->name('misionvision.index');
Route::get('about',[AboutController::class, 'index'])->name('about.index');
Route::get('shipment',[ShipmentController::class, 'index'])->name('shipment.index');

//Ruta para el importador
Route::resource('producto', ProductosController::class);
Route::get('/import', function () {
    return view('csvimport');
});
Route::post('import-csv', [ProductosController::class, 'importCSV'])->name('import');