<?php

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

// Auth routes


require __DIR__.'/auth.php';

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth:dashboard'], function(){

    //dashboard page
    Route::view('/', 'user::dashboard.dashboard')->name('dashboard');

    // other routes
    Route::group(['prefix' => 'users', 'as' => 'users.'], function(){

        //the grouped operations (declare them before resource routes to avoid conflicts)
        Route::delete('delete-many', [Modules\User\Http\Controllers\UserController::class, 'destroyMany'])
        ->name('destroy.many');

        Route::get('ajax/datatable', UserDatatableController::class)
            ->name('datatable');

        //Model Resources routes
        //didn't use resource to have the ability to attach permission middleware to each route
        // avoid using middlewares inside of controllers keep this structure maintained
        Route::get('/',[Modules\User\Http\Controllers\UserController::class, 'index'])
            ->name('index');
        
        Route::post('/',[Modules\User\Http\Controllers\UserController::class, 'store'])
            ->name('store');

        Route::get('create',[Modules\User\Http\Controllers\UserController::class, 'create'])
            ->name('create');

        Route::put('{user}',[Modules\User\Http\Controllers\UserController::class, 'update'])
            ->name('update');

        Route::get('{user}/edit',[Modules\User\Http\Controllers\UserController::class, 'edit'])
            ->name('edit');

        Route::delete('{user}',[Modules\User\Http\Controllers\UserController::class, 'destroy'])
            ->name('destroy');


        // trashed routes
        Route::group(['prefix' => 'trashed', 'as' => 'trashed.', 'namespace' => 'Trashed'], function(){
            //the grouped operations (declare them before resource routes to avoid conflicts)
            Route::delete('/delete-many', [Modules\User\Http\Controllers\Trashed\UserTrashedController::class, 'destroyMany'])
                ->name('destroy.many');

            Route::post('/restore-many', [Modules\User\Http\Controllers\Trashed\UserTrashedController::class, 'restoreMany'])
                ->name('restore.many');

            // trashed resource operation
            Route::delete('/{user}', [Modules\User\Http\Controllers\Trashed\UserTrashedController::class, 'destroy'])
                ->name('destroy');

            Route::post('/{user}', [Modules\User\Http\Controllers\Trashed\UserTrashedController::class, 'restore'])
                ->name('restore');

            Route::get('/ajax/datatable', UserTrashedDataTableController::class)
                ->name('datatable');
        });
    });
});

Route::redirect('/', '/user/login', 301);