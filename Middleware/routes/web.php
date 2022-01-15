<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Global Middleware
Route::view('users','users');
Route::view('home','home');
Route::view('noaccess','noaccess');


// Group Route Middleware
Route::group(['middleware'=>['VotingCount']], function(){
    Route::view('bnp','bnpparty');
    Route::view('awami','awami');
});

// Single Route Middleware
Route::view('movie','movie')->middleware('movie');

