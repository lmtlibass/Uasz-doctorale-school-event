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

Route::controller(AppelleController::class)->group( function(){
    Route::get('appelles',               'index')->name('responsable.appelle.index');
    Route::get('appelle',               'create')->name('responsable.appelle.create');
    Route::post('appelle',              'store')->name('responsable.appelle.store');
    Route::get('appelle/{appelle}',     'show')->name('responsable.appelle.show');
    Route::get('appelle/{appelle}',     'edit')->name('responsable.appelle.edit');
    Route::put('appelle/{appelle}',     'update')->name('responsable.appelle.update');
    Route::delete('appelle/{appelle}',  'destroy')->name('responsable.appelle.destroy');
});
