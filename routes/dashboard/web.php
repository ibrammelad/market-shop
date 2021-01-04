<?php


use App\Http\Controllers\dashboard\dashboardController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'dashboard' ] , function (){


    Route::get('/',[dashboardController::class,'index'])->name('dashboard.index');
});
