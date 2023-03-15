<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/event/{id}',[\App\Http\Controllers\EventController::class, 'show']);
Route::post('/event', [\App\Http\Controllers\ApplicationController::class, 'create']);
Route::get('/event/applications/{id}', [\App\Http\Controllers\ApplicationController::class, 'show']);
Route::get('/events',[\App\Http\Controllers\EventController::class, 'list']);
