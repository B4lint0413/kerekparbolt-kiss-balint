<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BicycleController;
use App\Http\Controllers\ManufacturerController;

Route::get('/bicycles', [BicycleController::class, 'index']);
Route::get('/bicycles/{bicycle}', [BicycleController::class, 'show'])->whereNumber("bicycle");
Route::post('/bicycles', [BicycleController::class, 'store']);
Route::put('/bicycles/{bicycle}', [BicycleController::class, 'update'])->whereNumber("bicycle");
Route::delete('/bicycles/{bicycle}', [BicycleController::class, 'destroy'])->whereNumber("bicycle");

Route::get('/manufacturers', [ManufacturerController::class, 'index']);
Route::get('/manufacturers/{manufacturer}', [ManufacturerController::class, 'show'])->whereNumber("manufacturer");
Route::post('/manufacturers', [ManufacturerController::class, 'store']);
Route::put('/manufacturers/{manufacturer}', [ManufacturerController::class, 'update'])->whereNumber("manufacturer");
Route::delete('/manufacturers/{manufacturer}', [ManufacturerController::class, 'destroy'])->whereNumber("manufacturer");