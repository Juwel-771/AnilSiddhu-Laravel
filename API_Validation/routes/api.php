<?php

use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('add',[StudentController::class,'add']);
Route::put('update',[StudentController::class,'update']);
Route::delete('delete/{id}',[StudentController::class,'delete']);
Route::get('search/{name}',[StudentController::class,'search']);
Route::post('test',[StudentController::class,'testData']);
