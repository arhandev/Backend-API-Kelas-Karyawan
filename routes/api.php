<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\ArticleController as AuthArticleController;
use App\Http\Controllers\Auth\ProductController as AuthProductController;
use App\Http\Controllers\AuthContoller;
use App\Http\Controllers\ProductController;
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


Route::post('/login', [AuthContoller::class, 'login']);
Route::post('/register', [AuthContoller::class, 'register']);


Route::group(['prefix' => 'articles'], function () {
    Route::get('/', [ArticleController::class, 'index']);
    Route::get('/{article}', [ArticleController::class, 'show']);
    Route::group(['middleware' => ['auth:sanctum']], function () {
        Route::post('/', [ArticleController::class, 'store']);
        Route::put('/{article}', [ArticleController::class, 'update']);
        Route::delete('/{article}', [ArticleController::class, 'delete']);
    });

});

Route::group(['prefix' => 'products'], function () {
    Route::get('/', [ProductController::class, 'index']);
    Route::get('/{product}', [ProductController::class, 'show']);
    Route::post('/', [ProductController::class, 'store']);
    Route::put('/{product}', [ProductController::class, 'update']);
    Route::delete('/{product}', [ProductController::class, 'delete']);
});


Route::get('/final/products', [AuthProductController::class, 'index']);
Route::get('/final/products/{product}', [AuthProductController::class, 'show']);
Route::group(['prefix' => 'final/products', 'middleware' => ['auth:sanctum']], function () {
    Route::post('/', [AuthProductController::class, 'store']);
    Route::put('/{product}', [AuthProductController::class, 'update']);
    Route::delete('/{product}', [AuthProductController::class, 'delete']);
});
