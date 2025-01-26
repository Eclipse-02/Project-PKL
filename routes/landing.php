<?php

use Illuminate\Support\Facades\Route;

// controllers
use App\Http\Controllers\Landing\MainController;
use App\Http\Controllers\Landing\TestController;

/*
|--------------------------------------------------------------------------
| Landing Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MainController::class, 'index'])->name('landing.main.welcome');

Route::group(['prefix' => 'package'], function () {

    Route::get('/', [MainController::class, 'package'])->name('landing.main.welcome.packages');
    Route::get('/{package}', [MainController::class, 'show'])->name('landing.main.welcome.show');

});
