<?php

use App\Http\Controllers\dashboard\dashboardController;
use App\Http\Controllers\dashboard\userController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']],
    function () {
        Route::group(['prefix' => 'dashboard'], function () {

            // show dashboard
            Route::get('/', [dashboardController::class, 'index'])->name('dashboard.index');
            // end route dashboard


            // route of users
            Route::get('users', [userController::class, 'index'])->name('dashboard.users.index');
            Route::get('users/create', [userController::class, 'create'])->name('dashboard.users.create');
            Route::post('users/store', [userController::class, 'store'])->name('dashboard.users.store');
            Route::get('users/edit/{id}', [userController::class, 'edit'])->name('dashboard.users.edit');
            Route::patch('users/update/{id}', [userController::class, 'update'])->name('dashboard.users.update');
            Route::post('users/delete/{id}', [userController::class, 'destroy'])->name('dashboard.users.delete');
            // end route of users


        });
    });



