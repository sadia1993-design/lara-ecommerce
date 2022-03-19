<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\FrontController;

/*
|--------------------------------------------------------------------------
| front routes
|--------------------------------------------------------------------------
*/

Route::get('/',  [FrontController::class, 'home']);
Route::get('/about',  [FrontController::class, 'about']);
Route::get('/cart',  [FrontController::class, 'cart']);
Route::get('/shop',  [FrontController::class, 'shop']);
Route::get('/checkout',  [FrontController::class, 'checkout']);
Route::get('/contact',  [FrontController::class, 'contact']);
Route::get('/details',  [FrontController::class, 'details']);
Route::get('/thanks',  [FrontController::class, 'thanks']);
Route::get('/returns',  [FrontController::class, 'returns']);
Route::get('/terms',  [FrontController::class, 'terms']);
Route::get('/privacy',  [FrontController::class, 'privacy']);
