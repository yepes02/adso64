<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\NivelRiesgoController;
use App\Http\Controllers\TipoContratoController;

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

Route::get('/departamento/create', [DepartamentoController::class,'create'])->name('departamento.create');
Route::post('/departamento', [DepartamentoController::class, 'store'])->name('departamento.store');
Route::get('/departamento/index', [DepartamentoController::class, 'index1'])->name('departamento.index');


Route::get('/cargo/create', [CargoController::class,'create'])->name('cargo.create');
Route::post('/cargo', [CargoController::class, 'store'])->name('cargo.store');
Route::get('/cargo/index', [CargoController::class, 'index2'])->name('cargo.index');


Route::get('/nivel_riesgo/create', [NivelRiesgoController::class,'create'])->name('nivelRiesgo.create');
Route::post('/nivel_riesgo', [NivelRiesgoController::class, 'store'])->name('nivelRiesgo.store');
Route::get('/nivel_riesgo/index', [NivelRiesgoController::class, 'index3'])->name('nivelRiesgos.index');

Route::get('/tipo_contrato.create', [TipoContratoController::class,'create'])->name('tipoContrato.create');
Route::post('/tipo_contrato', [TipoContratoController::class, 'store'])->name('tipoContrato.store');
Route::get('/tipo_contrato/index', [TipoContratoController::class, 'index4'])->name('tipoContratos.index');
