<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoryapiController;
use App\Http\Controllers\Api\ArticleapiController;
use App\Http\Controllers\Api\IncomeapiController;
use App\Http\Controllers\Api\PersonapiController;
use App\Http\Controllers\Api\SaleapiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('categories', CategoryapiController::class);
Route::apiResource('articles', ArticleapiController::class);
Route::apiResource('incomes', IncomeapiController::class);
Route::apiResource('people', PersonapiController::class);
Route::apiResource('sales', SaleapiController::class);
