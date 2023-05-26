<?php

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/

use Modules\User\Http\Controllers\Auth\LoginController;

Route::group(['prefix' => 'user','as' => 'user.'], function () {
    Route::middleware(['guest:dashboard'])->group(function () {
        Route::get('login', [LoginController::class, 'show'])->name('login.show');
        Route::post('login', [LoginController::class, 'login'])->name('login');
    });

    Route::middleware(['auth:dashboard'])->group(function () {
        Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    });
});