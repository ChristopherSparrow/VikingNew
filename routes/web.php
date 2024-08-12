<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\SeasonController;
use App\Http\Controllers\CompetitionController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('players', PlayerController::class);
Route::resource('teams', TeamController::class);
Route::resource('seasons', SeasonController::class);
Route::resource('competitions', CompetitionController::class);
