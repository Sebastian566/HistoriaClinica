<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\FacturaController;
  
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
    if (Auth::check()) {
        return redirect('/pacientes'); // Redirige al usuario autenticado a otra página, como el panel de control
    } else {
        return view('auth.login'); // Muestra la página de inicio de sesión para usuarios no autenticados
    }
});
  
Auth::routes(['register' => false]);

  
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('articulos', ArticuloController::class);
    Route::resource('pacientes', PacienteController::class);
    Route::resource('facturas', FacturaController::class);


   

  
}); 