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

Route::get('/',function(){
    return redirect('/events');
});
Route::get('/event/{id}',[\App\Http\Controllers\EventController::class, 'showEvent']);
Route::post('/event/{id}', [\App\Http\Controllers\ApplicationController::class, 'createNewApplication']);
Route::get('/event/{id}/applications', [\App\Http\Controllers\ApplicationController::class, 'showApplications']);
Route::get('/events',[\App\Http\Controllers\EventController::class, 'listAllEvents']);
Route::get('/new-event', function (){
    return view('new-event');
})->middleware('auth');
Route::post('/new-event',[\App\Http\Controllers\EventController::class, 'saveNewEvent'])->middleware('auth');

Route::get('/logout', [\App\Http\Controllers\UserController::class, 'logout'])->middleware('auth');

Route::get('/login', function() {
    return view('login');
})->middleware('guest');
Route::post('/login', [\App\Http\Controllers\UserController::class, 'login'])->middleware('guest');

Route::get('/register', function() {
    return view('register');
})->middleware('guest');
Route::post('/register', [\App\Http\Controllers\UserController::class, 'createUser'])->middleware('guest');
