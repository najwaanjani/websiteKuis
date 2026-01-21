<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/index', function () {
    return view('index');
});

Route::get('/', [LandingPageController::class, 'landingPage']);

//user
Route::get('/show', [UserController::class, 'show']);
Route::get('/create', [UserController::class, 'create']);
Route::post('/add', [UserController::class, 'add']);
Route::get('/user/edit/{id}', [UserController::class, 'edit']);
Route::post('/user/update/{id}', [UserController::class, 'update']);
Route::get('/user/delete/{id}', [UserController::class, 'delete']);