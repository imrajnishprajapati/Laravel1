<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ApiCrudController;

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

// Route::get('index',[ApiCrudController::class,"index"]);

// Route::post('create',[ApiCrudController::class,"create"]);

// Route::put('update',[ApiCrudController::class,"update"]);

// Route::delete('destroy/{id}',[ApiCrudController::class,"destroy"]);

// Route::get('search/{name}',[ApiCrudController::class,"search"]);

Route::controller(ApiCrudController::class)->group(function () {
    Route::get('/index/{id}', 'index');
    Route::get('/index', 'index');
    Route::post('/create', 'create');
    Route::put('/update', 'update');
    Route::delete('/destroy/{id}', 'destroy');
    Route::get('/search/{name}', 'search');
});