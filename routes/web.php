<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\InfermeiraController;
use App\Http\Controllers\CompromissoController;

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


Route::prefix('/')->group(function() {
    Route::get('/', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboards-index');
});

Route::prefix('/departamentos')->group(function() {
    Route::get('/', [DepartamentoController::class, 'index'])->name('departamentos-index');
    Route::get('/create', [DepartamentoController::class, 'create'])->name('departamentos-create');
    Route::post('/', [DepartamentoController::class, 'store'])->name('departamentos-store');
    Route::get('/{id}/edit', [DepartamentoController::class, 'edit'])->where('id', '[0-9]+')->name('departamentos-edit');
    Route::put('/{id}', [DepartamentoController::class, 'update'])->where('id', '[0-9]+')->name('departamentos-update');
    Route::delete('/{id}', [DepartamentoController::class, 'destroy'])->where('id', '[0-9]+')->name('departamentos-destroy');
});

Route::prefix('medicos')->group(function() {
    Route::get('/', [MedicoController::class, 'index'])->name('medicos-index');
    Route::get('/create', [MedicoController::class, 'create'])->name('medicos-create');
    Route::post('/', [MedicoController::class, 'store'])->name('medicos-store');
    Route::get('/{id}/edit', [MedicoController::class, 'edit'])->where('id', '[0-9]+')->name('medicos-edit');
    Route::put('/{id}', [MedicoController::class, 'update'])->where('id', '[0-9]+')->name('medicos-update');
    Route::delete('{id}', [MedicoController::class, 'destroy'])->where('id', '[0-9]+')->name('medicos-destroy');
});

Route::prefix('pacientes')->group(function() {
    Route::get('/', [PacienteController::class, 'index'])->name('pacientes-index');
    Route::get('/create', [PacienteController::class, 'create'])->name('pacientes-create');
    Route::post('/', [PacienteController::class, 'store'])->name('pacientes-store');
    Route::get('/{id}/edit', [PacienteController::class, 'edit'])->where('id', '[0-9]+')->name('pacientes-edit');
    Route::put('/{id}', [PacienteController::class, 'update'])->where('id', '[0-9]+')->name('pacientes-update');
    Route::delete('/{id}', [PacienteController::class, 'destroy'])->where('id', '[0-9]+')->name('pacientes-destroy');
});

Route::prefix('/infermeiras')->group(function() {
    Route::get('/', [InfermeiraController::class, 'index'])->name('infermeiras-index');
    Route::get('/create', [InfermeiraController::class, 'create'])->name('infermeiras-create');
    Route::post('/', [InfermeiraController::class, 'store'])->name('infermeiras-store');
    Route::get('/{id}/edit', [InfermeiraController::class, 'edit'])->where('id', '[0-9]+')->name('infermeiras-edit');
    Route::put('/{id}', [InfermeiraController::class, 'update'])->where('id', '[0-9]+')->name('infermeiras-update');
    Route::delete('/{id}', [InfermeiraController::class, 'destroy'])->where('id', '[0-9]+')->name('infermeiras-destroy');
});

Route::prefix('/compromissos')->group(function() {
    Route::get('/', [CompromissoController::class, 'index'])->name('compromissos-index');
    Route::get('/create', [CompromissoController::class, 'create'])->name('compromissos-create');
    Route::post('/', [CompromissoController::class, 'store'])->name('compromissos-store');
    Route::get('/{id}/edit', [CompromissoController::class, 'edit'])->where('id', '[0-9]+')->name('compromissos-edit');
    Route::put('/{id}', [CompromissoController::class, 'update'])->where('id', '[0-9]+')->name('compromissos-update');
    Route::delete('/{id}', [CompromissoController::class, 'destroy'])->where('id', '[0-9]+')->name('compromissos-destroy');

});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
