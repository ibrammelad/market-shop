<?php

use App\Http\Controllers\dashboard\dashboardController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ],

    function()
    {
    Route::group(['prefix'=>'dashboard' ] , function (){

        Route::get('/',[dashboardController::class,'index'])->name('dashboard.index');
        Route::get('/',[dashboardController::class,'show'])->name('dashboard.show');

    });
});


