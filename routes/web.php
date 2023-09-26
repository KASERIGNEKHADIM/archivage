<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PieceController;
use App\Http\Controllers\NiveauController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\NationaliteController;

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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth', 'auth.session'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::resource('categories', CategorieController::class);

    Route::resource('documents', DocumentController::class)->middleware(['auth', 'verified']);

    Route::resource('etudiants', EtudiantController::class)->middleware(['auth', 'verified']);

    Route::resource('niveaux', NiveauController::class);

    Route::resource('nationalites', NationaliteController::class);

    Route::resource('pieces', PieceController::class);
});

require __DIR__.'/auth.php';
