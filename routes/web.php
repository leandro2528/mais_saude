<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\MedicoController;

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


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
