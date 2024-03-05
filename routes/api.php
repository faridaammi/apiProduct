<?php

use App\Http\Controllers\ProduitsController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/produits', [ProduitsController::class, "liste"]);

Route::get('/produits/{id}', [ProduitsController::class, "show"]);

Route::post('/produits', [ProduitsController::class, "addProduct"]);