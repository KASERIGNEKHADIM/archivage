<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/menu', function () {
    return view('menu');
});
Route::resource('categories', CategorieController::class);


Route::resource('documents', DocumentController::class);

Route::resource('etudiants', EtudiantController::class);

Route::resource('niveaux', NiveauController::class);

Route::resource('nationalites', NationaliteController::class);

Route::resource('pieces', PieceController::class);




