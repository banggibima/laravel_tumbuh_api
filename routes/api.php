<?php

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

Route::resource('/owners', OwnerController::class);
Route::resource('/categories', CategoryController::class);
Route::resource('/plants', PlantController::class);
