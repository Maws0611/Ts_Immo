<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgenceController;
use App\Http\Controllers\ProprieteController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\ProprietaireController;

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

Route::resource('proprietaires', ProprietaireController::class);
Route::resource('proprietes', ProprieteController::class);
Route::resource('agences', AgenceController::class);

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => ['auth']], function(){
    Route::get('/dashboard', DashbordController::class));
});

require __DIR__.'/auth.php';
