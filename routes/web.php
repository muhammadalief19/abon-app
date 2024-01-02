<?php

use App\Http\Controllers\AbsenController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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


Route::middleware("guest")->group(function() {
    // Route Landing Page
    Route::get('/', [HomeController::class, 'landingPage'])->name('landing-page');

    Route::controller(AuthController::class)->group(function() {
        // route login
        Route::get('/login', 'viewLogin')->name('view.login');
        Route::post('/login', 'login')->name('login');

        // route register
        Route::get('/register', 'viewRegister')->name('view.register');
        Route::post('/register', 'register')->name('register');
    });

    
});


Route::middleware("auth")->group(function() {
    // route dashboard
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

    // route profile
    Route::get('/profile', [HomeController::class, 'profile'])->name('profile');

    // route logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // route absen
    Route::resource('/absen', AbsenController::class);
});
