<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;



Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('login', [LoginController::class, 'showAdminLoginForm']);
    Route::post('login', [LoginController::class,'adminLogin'])->name('login');
});


