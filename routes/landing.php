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
    Route::post('/', [MainController::class, 'store'])->name('landing.main.welcome.store');
    Route::get('/register', [MainController::class, 'create'])->name('landing.main.welcome.register');
    Route::get('/register/{package}/success', [MainController::class, 'success'])->name('landing.main.welcome.success');
    Route::get('/{package}', [MainController::class, 'show'])->name('landing.main.welcome.show');

});

Route::domain('travel' . '.test')->group(function () {

    Route::get('/', [TestController::class, 'index'])->name('landing.test.welcome');
    
    Route::group(['prefix' => 'package'], function () {

        Route::get('/', [TestController::class, 'package'])->name('landing.test.welcome.packages');
        Route::post('/', [TestController::class, 'store'])->name('landing.test.welcome.store');
        Route::get('/register', [TestController::class, 'create'])->name('landing.test.welcome.register');
        Route::get('/register/{package}/success', [TestController::class, 'success'])->name('landing.test.welcome.success');
        Route::get('/{package}', [TestController::class, 'show'])->name('landing.test.welcome.show');

    });

});
