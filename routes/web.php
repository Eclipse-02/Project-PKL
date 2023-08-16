<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\ParameterController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserRoleController;
use App\Http\Controllers\ZipController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware('auth')->group(function () {
    Route::resource('/dashboard/registrasi', RegisterController::class);
    Route::resource('provinsis', ProvinsiController::class);
    Route::resource('kotas', KotaController::class);
    Route::resource('kecamatans', KecamatanController::class);
    Route::resource('kelurahans', KelurahanController::class);
    Route::resource('zips', ZipController::class);
    Route::resource('branchs', BranchController::class);
    Route::resource('parameters', ParameterController::class);
    Route::resource('users', UserController::class);
    Route::resource('employees', EmployeeController::class);
    Route::resource('positions', PositionController::class);
    Route::resource('areas', AreaController::class);
    // Route::resource('userroles', UserRoleController::class);
});

Auth::routes(['verify' => true]);

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
