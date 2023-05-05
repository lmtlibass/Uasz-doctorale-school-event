<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SoumissionController;
use App\Http\Controllers\Responsable\AppelleController;
use App\Http\Controllers\Responsable\EvenementController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'index')->name('home');
    Route::get('/appelle', 'appelle')->name('appelle');
    Route::get('appelle/{id}', 'showAppelle')->name('appelle.show');
    Route::get('/evenement', 'evenement')->name('evenement');
    Route::get('evenement/{id}', 'showEvenement')->name('evenement.show');
});

Route::resource('soumission', SoumissionController::class)->except('create');




Route::prefix('responsable')->name('responsable.')->group(function(){
    Route::resource('appelle', AppelleController::class);
    Route::resource('evenement', EvenementController::class);
});
