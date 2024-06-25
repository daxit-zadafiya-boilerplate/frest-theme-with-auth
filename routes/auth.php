<?php

use App\Http\Controllers\Auth\AuthenticateController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::prefix('admin')->controller(AuthenticateController::class)->group(function() {
        Route::get('login', 'loginCreate')->name('login');
        Route::post('login', 'loginStore')->name('login.store');
        Route::get('register', 'register')->name('register');
        Route::post('register', 'registerStore')->name('register.store');
        Route::get('forgot-password', 'forgotPasswordCreate')->name('forgot.password');
        Route::post('forgot-password', 'forgotPasswordStore')->name('password.email');
        Route::get('reset-password/{token}/{email}', 'resetPasswordCreate')->name('reset.password');
        Route::post('reset-password', 'resetPasswordStore')->name('password.store');
    });
});

Route::middleware('auth')->group(function () {
    Route::prefix('admin')->controller(AuthenticateController::class)->group(function() {
        Route::post('logout', 'logout')->name('logout');
    });
});
