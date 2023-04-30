<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Responsable\AppelleController;

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

Route::get('/home', function(){
    dd('libs log');
});



Route::prefix('responsable')->name('responsable.')->group(function(){
    Route::resource('appelle', AppelleController::class);
});
