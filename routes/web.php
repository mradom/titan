<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SetupSheetController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/', function () {
    return redirect('/setup-sheets');
});

Route::get('setup-sheets', [SetupSheetController::class, 'index'])->middleware(['auth'])->name('setup_sheets.index');//->middleware('auth');
Route::post('setup-sheets', [SetupSheetController::class, 'store'])->name('setup_sheets.store');
Route::get('setup-sheets/create', [SetupSheetController::class, 'create'])->name('setup_sheets.create');
Route::get('setup-sheets/{auto}/{piloto}', [SetupSheetController::class, 'show'])->name('setup_sheets.show');
Route::put('setup-sheets/{auto}/{piloto}', [SetupSheetController::class, 'update'])->name('setup_sheets.update');
Route::delete('setup-sheets/{auto}/{piloto}', [SetupSheetController::class, 'destroy'])->name('setup_sheets.destroy');
Route::get('setup-sheets/{auto}/{piloto}/edit', [SetupSheetController::class, 'edit'])->name('setup_sheets.edit');

