<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SetupSheetController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('setup-sheets', [SetupSheetController::class, 'index'])->name('setup_sheets.index');

// Ruta para mostrar una ficha específica por auto y piloto
Route::get('setup-sheets/{auto}/{piloto}', [SetupSheetController::class, 'show'])->name('setup_sheets.show');

// Ruta para mostrar el formulario de creación de una ficha
Route::get('setup-sheets/create', [SetupSheetController::class, 'create'])->name('setup_sheets.create');

// Ruta para procesar el formulario de creación de una ficha
Route::post('setup-sheets', [SetupSheetController::class, 'store'])->name('setup_sheets.store');

// Ruta para mostrar el formulario de edición de una ficha
Route::get('setup-sheets/{auto}/{piloto}/edit', [SetupSheetController::class, 'edit'])->name('setup_sheets.edit');

// Ruta para actualizar los datos de una ficha
Route::put('setup-sheets/{auto}/{piloto}', [SetupSheetController::class, 'update'])->name('setup_sheets.update');

// Ruta para eliminar una ficha
Route::delete('setup-sheets/{auto}/{piloto}', [SetupSheetController::class, 'destroy'])->name('setup_sheets.destroy');
