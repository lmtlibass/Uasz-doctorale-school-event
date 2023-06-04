<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MeetingController;
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

Route::controller(App\Http\Controllers\Responsable\SoumissionController::class)->prefix('responsable')->name('responsable.')->group(function(){
    Route::get('soumissions/{appelle}', 'getSoumission')->name('soumission.get');
    Route::get('soumission/{soumission}', 'showSoumission')->name('soumission.show');
    Route::get('soumission/{soumission}/accepter', 'accepter')->name('soumission.accepter');
    Route::get('soumission/{soumission}/refuser', 'refuser')->name('soumission.refuser');
});


Route::prefix('responsable')->name('responsable.')->group(function(){
    Route::resource('appelle', AppelleController::class);
    Route::resource('evenement', EvenementController::class);
});


Route::namespace('App\Http\Controllers\Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::resource('users', UserController::class);
});

Route::get('meeting/home', function() {
    return view('meeting.home');
});
Route::get('meeting/sallon/{meetingId}', function() {
    return view('meeting.room');
});

Route::prefix('meeting')->name('meeting.')->group(function(){
    Route::post("/nouveau", [MeetingController::class, 'createMeeting'])->name("createMeeting");
    Route::post("/validerMeeting", [MeetingController::class, 'validateMeeting'])->name('validateMeeting');
});