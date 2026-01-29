<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KuisController;
use App\Http\Controllers\ProfileController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/index', function () {
    return view('index');
});

Route::get('/landingpage', [LandingPageController::class, 'landingPage']);

//user
Route::get('/admin', [AdminController::class, 'dashboard']);
Route::get('/admin/tabeluser', [AdminController::class, 'showUsers']);
Route::get('/admin/tabeluser/create', [AdminController::class, 'createUsers']);
Route::post('/admin/tabeluser/add', [AdminController::class, 'addUsers']);
Route::get('/admin/tabeluser/edit/{id}', [AdminController::class, 'editUsers']);
Route::post('/admin/tabeluser/update/{id}', [AdminController::class, 'updateUsers']);
Route::get('/admin/tabeluser/delete/{id}', [AdminController::class, 'deleteUsers']);

//kuis
Route::get('/admin/tabelkuis', [KuisController::class, 'show']);
Route::get('/admin/tabelkuis/create', [KuisController::class, 'create']);
Route::post('/admin/tabelkuis/add', [KuisController::class, 'add']);
Route::get('/admin/tabelkuis/createsoal/{id}', [KuisController::class, 'createSoal']);
Route::post('/admin/tabelkuis/addsoal/{id}', [KuisController::class, 'addSoal']);
Route::get('/admin/tabelkuis/detail/{id}', [KuisController::class, 'detailKuis']);
Route::get('/admin/tabelkuis/editsoal/{id}', [KuisController::class, 'editSoal']);
Route::post('/admin/tabelkuis/update/{id}', [KuisController::class, 'update']);


Route::get('/', fn() => view('welcome'));

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/quiz', fn() => view('kuis'));
});

Route::get('/dashboard', function () {
    return view('landingPage');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
})->name('logout');

require __DIR__.'/auth.php';