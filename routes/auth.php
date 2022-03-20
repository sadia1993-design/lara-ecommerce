<?php

use Illuminate\Support\Facades\Route;


Route::get('/register',  [\App\Http\Controllers\auth\RegisteredController::class, 'create'])
      ->middleware('guest')
      ->name('register');
