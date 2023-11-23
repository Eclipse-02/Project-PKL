<?php

// Default route files

// Master controllers
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Master\KecamatanController;
use App\Http\Controllers\Master\KelurahanController;
use App\Http\Controllers\Master\KotaController;
use App\Http\Controllers\Master\ProvinsiController;
use App\Http\Controllers\Master\RegisterPackageController;
use App\Http\Controllers\Master\ZipController;

// Finance controllers
use App\Http\Controllers\Finance\AccountController;

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
    Route::get('register', [RegisterPackageController::class, 'api'])->name('register.api');
    Route::get('accounts', [AccountController::class, 'api'])->name('accounts.api');
    Route::get('registerpackage/{id}', [RegisterPackageController::class, 'api'])->name('registerpackage.api');
    Route::get('utilty/{coy_id}/{empl_branch}', [RegisterPackageController::class, 'utilApi'])->name('util.api');
});
