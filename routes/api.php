<?php

use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KelurahanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\ZipController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1'], function() {
    Route::get('provinsis', [ProvinsiController::class, 'api'])->name('provinsis.api');
    Route::get('kotas', [KotaController::class, 'api'])->name('kotas.api');
    Route::get('kecamatans', [KecamatanController::class, 'api'])->name('kecamatans.api');
    Route::get('kelurahans', [KelurahanController::class, 'api'])->name('kelurahans.api');
    Route::get('zips', [ZipController::class, 'api'])->name('zips.api');
});
