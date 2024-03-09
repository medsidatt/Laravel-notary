<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\VanteController;
use \App\Http\Controllers\AcheterController;
use \App\Http\Controllers\VandeurController;
use \App\Http\Controllers\TerrainController;


Route::get('/', function () {
    return view('dashboard');
})->name("home")->middleware('isLoggedIn');
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('alreadyLoggedIn');
Route::post('login', [LoginController::class, 'login'])->name("login-user");

Route::get('register', [LoginController::class, 'showRegistrationForm'])->name("register-form")->middleware('alreadyLoggedIn');
Route::post('register/user', [LoginController::class, 'register'])->name("register-user");

Route::middleware(['isLoggedIn'])->group(function () {

// Registration Routes
    Route::get('logout', [LoginController::class, 'logout'])->name("logout");

    Route::get('vantes', [VanteController::class, 'index'])->name('vantes-index');
    Route::get('vantes/{id}', [VanteController::class, 'info'])->name('vante-info');
    Route::get('vantes/vante', [VanteController::class, 'showForm'])->name('vante-form');
    Route::post('vantes/vante', [VanteController::class, 'create'])->name('create-vante');

    Route::get('vantes/acheteur', [AcheterController::class, 'index'])->name("acheter-form");
    Route::post('vantes/acheteur', [AcheterController::class, 'create'])->name('create-acheteur');

    Route::get('vantes/vanteur', [VandeurController::class, 'index'])->name("vandeur-form");
    Route::post('vantes/vandeur', [VandeurController::class, 'create'])->name("create-vandeur");

    Route::get('vantes/terrain', [TerrainController::class, 'index'])->name("terrain-form");
    Route::post('vantes/terrain', [TerrainController::class, 'create'])->name("create-terrain");

});
