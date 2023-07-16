<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SoumissionController;
use App\Http\Controllers\Meeting\MeetingController;
use App\Http\Controllers\Responsable\AppelleController;
use App\Http\Controllers\Responsable\EvenementController;
use Illuminate\Support\Facades\Auth;

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





Route::controller(HomeController::class)
    ->middleware('auth')
    ->group(function () {
        Route::get('/', 'index')->name('home');
        Route::get('/appelle', 'appelle')->name('appelle');
        Route::get('appelle/{id}', 'showAppelle')->name('appelle.show');
        Route::get('evenement/{id}', 'showEvenement')->name('evenement.show');
    });

Route::resource('evenement', App\Http\Controllers\EvenementController::class);

Route::resource('soumission', SoumissionController::class)->except('create');

Route::controller(App\Http\Controllers\Responsable\SoumissionController::class)
    ->prefix('responsable')
    ->name('responsable.')
    ->middleware('auth')
    ->group(function () {
        Route::get('soumissions/{appelle}', 'getSoumission')->name('soumission.get');
        Route::get('soumission/{soumission}', 'showSoumission')->name('soumission.show');
        Route::get('soumission/{soumission}/accepter', 'accepter')->name('soumission.accepter');
        Route::get('soumission/{soumission}/refuser', 'refuser')->name('soumission.refuser');
        Route::post('soumission/sendMail', 'sendMail')->name('soumission.sendMail');
    });


Route::prefix('responsable')->name('responsable.')
    ->middleware('auth')
    ->group(function () {
        Route::resource('appelle', AppelleController::class);
        Route::resource('evenement', EvenementController::class);
});


Route::namespace('App\Http\Controllers\Admin')
    ->prefix('admin')
    ->name('admin.')
    ->middleware('auth')
    ->group(function () {
        Route::resource('users', UserController::class);
});

Route::get('/meetings', function () {
    return view('meeting.index');
})->middleware('auth')->name('meeting.index');

Route::post("/createMeeting", [MeetingController::class, 'createMeeting'])->middleware('auth')->name("createMeeting");

Route::post("/validateMeeting", [MeetingController::class, 'validateMeeting'])->middleware('auth')->name("validateMeeting");

Route::get("/meeting/{meetingId}", function ($meetingId) {

    $METERED_DOMAIN = env('METERED_DOMAIN');
    return view('meeting.sallon', [
        'METERED_DOMAIN' => $METERED_DOMAIN,
        'MEETING_ID' => $meetingId
    ]);
})->middleware('auth');


Route::controller(ArticleController::class)
    ->middleware('auth')
    ->name('article.')
    ->group(function (){
        Route::resource('article', ArticleController::class);
        Route::get('articles', 'getArticles')->name('articles');
});