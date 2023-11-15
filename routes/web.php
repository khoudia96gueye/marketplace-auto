<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcomesa');
});*/

Route::get('', [MarketController::class, 'index2']);

Route::get('/accueil', [MarketController::class, 'index']);
Route::get('/drivesasamarketplace', [MarketController::class, 'index1']);
Route::get('/login', [MarketController::class, 'index3']);
Route::get('/servicepage', [MarketController::class, 'index4']);
