<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgenceController;
use App\Http\Controllers\ProprieteController;
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

 // auth for both
Route::group(['middleware' => ['auth']], function(){
    Route::get('/dashboard', 'App\Http\Controllers\DashbordController@index')->name('dashboard');
});

 // auth for users
 Route::group(['middleware' => ['auth', 'role:prop']], function(){
    Route::get('/dashboard/profile', 'App\Http\Controllers\DashbordController@myprofile')
    ->name('dashboard.myprofile');
});

require __DIR__.'/auth.php';
