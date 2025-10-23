<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\GalleryController;


Route::middleware('guest')->group(function(){
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegister']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/forgot-password', [AuthController::class, 'showForgotPassword']);
    Route::post('/forgot-password', [AuthController::class, 'forgotPassword']);
    Route::get('/reset-password/{token}', [AuthController::class, 'showResetPassword'])->name('password.reset');
    Route::post('/reset-password', [AuthController::class, 'resetPassword']);
});

Route::middleware('auth')->group(function(){
    Route::get('/dashboard', function () {
        return view('pages.beranda');
    });
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::get('/menu', [MenuController::class, 'showGalerry']);
    Route::get('/gallery', [GalleryController::class, 'showGallery']);
    Route::get('/about', [AboutController::class, 'showAbout']);

});

