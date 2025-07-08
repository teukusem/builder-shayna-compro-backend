<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipleController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('principles', PrincipleController::class);
