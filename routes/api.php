<?php

use App\Http\Controllers\BuyController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UserController;
use App\Models\User;
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

Route::apiResource('/rol',RolController::class);
Route::apiResource('/user',UserController::class);
Route::apiResource('/buy', BuyController::class);
Route::apiResource('/product',ProductController::class);
Route::apiResource('/category',CategoryController::class);
Route::apiResource('/category_product',CategoryProductController::class);
