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
// Route::resource('proprietaires', ProprietaireController::class);
Route::resource('agences', AgenceController::class);

Route::get('/', function () {
    return view('welcome');
    // $user = App\Models\User::first();
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';

// user protected routes
Route::group(['middleware' => ['auth', 'user'], 'prefix' => 'user'], function () {
    Route::resource('proprietaires', ProprietaireController::class)->only([
        'index', 'update'
    ]);
});
// admin protected routes
Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
    Route::resource('proprietaires', ProprietaireController::class);
});
