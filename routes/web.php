<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NiveauController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\NationaliteController;
use App\Http\Controllers\PieceetrangereController;

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
Route::get('/menu', function () {
    return view('menu');
});
Route::resource('categories', CategorieController::class);
Route::delete('categories/{id}',[CategorieController::class,'destroy'])->name('categories.delete');
Route::get('categories/{id}/edit',[CategorieController::class,'edit'])->name('categories.edit');
Route::put('categories/{id}',[CategorieController::class,'update'])->name('categories.update');
Route::resource('documents', DocumentController::class);
Route::delete('documents/{id}',[DocumentController::class,'destroy'])->name('documents.delete');
Route::get('documents/{id}/edit',[DocumentController::class,'edit'])->name('documents.edit');
Route::put('documents/{id}',[DocumentController::class,'update'])->name('documents.update');
Route::resource('etudiants', EtudiantController::class);
Route::delete('etudiants/{id}',[EtudiantController::class,'destroy'])->name('etudiants.delete');
Route::get('etudiants/{id}/edit',[EtudiantController::class,'edit'])->name('etudiants.edit');
Route::put('etudiants/{id}',[EtudiantController::class,'update'])->name('etudiants.update');
Route::resource('niveaux', NiveauController::class);
Route::delete('niveaux/{id}',[NiveauController::class,'destroy'])->name('niveaux.delete');
Route::get('niveaux/{id}/edit',[NiveauController::class,'edit'])->name('niveaux.edit');
Route::put('niveaux/{id}',[NiveauController::class,'update'])->name('niveaux.update');
Route::resource('nationalites', NationaliteController::class);
Route::delete('nationalites/{id}',[NationaliteController::class,'destroy'])->name('nationalites.delete');
Route::get('nationalites/{id}/edit',[NationaliteController::class,'edit'])->name('nationalites.edit');
Route::put('nationalites/{id}',[NationaliteController::class,'update'])->name('nationalites.update');





