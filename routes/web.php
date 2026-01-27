<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\AdminController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/index', function () {
    return view('index');
});

Route::get('/', [LandingPageController::class, 'landingPage']);

//user
Route::get('/admin', [AdminController::class, 'dashboard']);
Route::get('/admin/tabeluser', [AdminController::class, 'showUsers']);
Route::get('/admin/tabeluser/create', [AdminController::class, 'createUsers']);
Route::post('/admin/tabeluser/add', [AdminController::class, 'addUsers']);
Route::get('/admin/tabeluser/edit/{id}', [AdminController::class, 'editUsers']);
Route::post('/admin/tabeluser/update/{id}', [AdminController::class, 'updateUsers']);
Route::get('/admin/tabeluser/delete/{id}', [AdminController::class, 'deleteUsers']);

// Route::get('/admin/tabeluser',  [AdminController::class, 'dashboard']);
// Route::get('/admin/tabelkuis',  [AdminController::class, 'dashboard']);