<?php

use App\Http\Controllers\ConfiguracionController;
use App\Http\Controllers\EdificioController;
use App\Http\Controllers\EntregaController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\SiconController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    //return view('welcome');
    return redirect()->route('funcionario.index');
});

Route::get('funcionario/getbyci/{ci}', [FuncionarioController::class, 'getbyci'])->name('funcionario.getbyci');
Route::resource('funcionario', FuncionarioController::class);

Route::resource('edificio', EdificioController::class);

Route::resource('user', UserController::class);

Route::resource('entrega', EntregaController::class);
Route::resource('configuracion', ConfiguracionController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('sicon/policy', [SiconController::class, 'policy'])->name('sicon.policy');
Route::get('sicon/print', [SiconController::class, 'print'])->name('sicon.print');
