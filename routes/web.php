<?php

use App\Http\Controllers\ProprieteController;
use App\Http\Controllers\ProprietaireController;
use App\Http\Controllers\AgenceController;
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
Route::resource('proprietes', ProprieteController::class);
Route::resource('proprietaires', ProprietaireController::class);
Route::resource('agences', AgenceController::class);

Route::get('/', function () {
    return view('welcome');
});
