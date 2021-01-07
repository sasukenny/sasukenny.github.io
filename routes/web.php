<?php

use App\Http\Controllers\CentroController;
use App\Http\Controllers\CitaController;
use App\Models\Cita;
use Illuminate\Support\Facades\Auth;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//LOGIN
Auth::routes();

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/inicio', function () {
    return view('inicio');
}); 

/*
Route::get('/programar', function () {
    return view('programar_cita.programar');
})->name(('programar')); 

Route::get('/lugarElegir', function () {
    return view('programar_cita.lugarElegir');
}); 

Route::get('/horaElegir', function () {
    return view('programar_cita.horaElegir');
})->name('hora'); 

Route::get('/confirmar', function () {
    return view('programar_cita.horaElegir');
})->name('hora'); 
*/

//-------------------------------------

/*-------------------------------------
eliminar cita proceso
estas rutas funcionan para el proceso de eliminar cita
*/

Route::get('/eliminar', function () {
    return view('eliminar_cita.eliminar');
})->name('eliminate');



Route::get('/centrosdesalud', function () {
    return view('programar_cita.centros');
}); 


Route::get('/register', function () {
    return view('auth.register');
})->name('register'); 

Route::get('/visualizar', function () {
    return view('visualizar_cita.visualizar');
})->name('show'); 



Route::get('/nosotros', function () {
    return view('nosotros.nosotros');
})->name('us');


//-------------------------------------
//CENTROS DE SALUD
Route::get('centros/', [CentroController::class, 'index'])->name('centros');
Route::get('centros/fetch/', [CentroController::class, 'fetch'])->name('centros.fetch');
Route::get('centros/regions/', [CentroController::class, 'fetchRegions'])->name('centros.regions');
Route::get('centros/provincias/', [CentroController::class, 'fetchProvincias'])->name('centros.provincias');
Route::get('centros/distritos/', [CentroController::class, 'fetchDistritos'])->name('centros.distritos');
Route::get('centros/selector/provincias', [CentroController::class, 'fetchSelectorProvincias'])->name('centros.selector.provincias');
Route::get('centros/selector/distritos', [CentroController::class, 'fetchSelectorDistritos'])->name('centros.selector.distritos');
Route::get('centros/selector/centros', [CentroController::class, 'fetchSelectorCentros'])->name('centros.selector.centros');

//CITAS
Route::get('programar/', [CitaController::class, 'index'])->name('cita.programar');
Route::get('programar/selector/provincias', [CitaController::class, 'fetchSelectorProvincias'])->name('cita.selector.provincias');
Route::get('programar/selector/distritos', [CitaController::class, 'fetchSelectorDistritos'])->name('cita.selector.distritos');
Route::get('programar/selector/centros', [CitaController::class, 'fetchSelectorCentros'])->name('cita.selector.centros');
Route::get('programar/selector/fechas', [CitaController::class, 'fetchSelectorFechas'])->name('cita.selector.fechas');
Route::get('programar/selector/horarios', [CitaController::class, 'fetchSelectorHorarios'])->name('cita.selector.horarios');

Route::post('programar/confirmar', [CitaController::class, 'confirmar'])->name('cita.confirmar');


//TESTING
Route::get('/test', function () {
    return 'hola mundo';
});
