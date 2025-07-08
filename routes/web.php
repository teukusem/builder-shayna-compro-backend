<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipleController;
use App\Http\Controllers\TeamController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('principles', PrincipleController::class);
Route::resource('teams', TeamController::class);
