<?php

use App\Http\Controllers\Auth as AuthController;
use App\Http\Controllers\Category as CategoryController;
use App\Http\Controllers\Owner as OwnerController;
use App\Http\Controllers\Plant as PlantController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/owners', [OwnerController::class, 'index'])->name('owners.index');
Route::get('/owners/{id}', [OwnerController::class, 'show'])->name('owners.show');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show');

Route::get('/plants', [PlantController::class, 'index'])->name('plants.index');
Route::get('/plants/{id}', [PlantController::class, 'show'])->name('plants.show');

Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/register', [AuthController::class, 'register'])->name('auth.register');

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/owners', [OwnerController::class, 'store'])->name('owners.store');
    Route::put('/owners/{id}', [OwnerController::class, 'update'])->name('owners.update');
    Route::delete('/owners/{id}', [OwnerController::class, 'destroy'])->name('owners.destroy');

    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/categories/{id}', [OwnerCategoryControllerController::class, 'destroy'])->name('categories.destroy');

    Route::post('/plants', [PlantController::class, 'store'])->name('plants.store');
    Route::put('/plants/{id}', [PlantController::class, 'update'])->name('plants.update');
    Route::delete('/plants/{id}', [PlantController::class, 'destroy'])->name('plants.destroy');

    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
});
