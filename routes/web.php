<?php

use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Jetstream;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sometings',function (){
   return view('example.form');
});

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');
//


Route::name('admin.')->prefix('admin')->middleware(['auth:sanctum','web', 'verified'])->group(function() {
    Route::view('/dashboard', "dashboard")->name('dashboard');

    Route::group(['middleware' => config('jetstream.middleware', ['web'])], function () {
        Route::group(['middleware' => ['auth', 'verified']], function () {
            // User & Profile...
            Route::get('/user/profile', [UserProfileController::class, 'show'])
                ->name('profile.show');

            // API...
            if (Jetstream::hasApiFeatures()) {
                Route::get('/user/api-tokens', [ApiTokenController::class, 'index'])->name('api-tokens.index');
            }

            // Teams...
            if (Jetstream::hasTeamFeatures()) {
                Route::get('/teams/create', [TeamController::class, 'create'])->name('teams.create');
                Route::get('/teams/{team}', [TeamController::class, 'show'])->name('teams.show');
                Route::put('/current-team', [CurrentTeamController::class, 'update'])->name('current-team.update');
            }
        });
    });

    Route::resource('tag',TagController::class)->only(['index','create','edit']);
    Route::resource('blog',BlogController::class)->only(['index','create','edit']);
    Route::resource('faq',FaqController::class)->only(['index','create','edit']);
    Route::resource('headline',HeadlineController::class)->only(['index','create','edit']);
    Route::resource('user',UserController::class)->only(['index','create','edit']);
    Route::resource('event',EventController::class)->only(['index','create','edit']);
    Route::resource('news',NewController::class)->only(['index','create','edit']);

});
