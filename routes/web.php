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

Route::get('/',[\App\Http\Controllers\EventController::class, 'listAllEvents']);
Route::get('/event/{id}',[\App\Http\Controllers\EventController::class, 'showEvent']);
Route::post('/event/{id}', [\App\Http\Controllers\ApplicationController::class, 'createNewApplication']);
Route::get('/event/{id}/applications', [\App\Http\Controllers\ApplicationController::class, 'showApplications']);
Route::get('/events',[\App\Http\Controllers\EventController::class, 'listAllEvents']);
Route::get('/new-event', function (){
    return view('new-event');
});
Route::post('/new-event',[\App\Http\Controllers\EventController::class, 'saveNewEvent']);
