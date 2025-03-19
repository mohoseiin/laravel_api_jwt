<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function (){
    Route::post('login',[\App\Http\Controllers\api\v1\auth\LoginController::class,'login']);
    Route::post('register',[\App\Http\Controllers\api\v1\auth\RegisterController::class,'register']);

    Route::middleware([\App\Http\Middleware\istockenjwt::class])->group(function () {
        Route::get('getuser', [\App\Http\Controllers\api\v1\UserController::class, 'getuser']);
        Route::get('logout',[\App\Http\Controllers\api\v1\auth\LoginController::class,'logout']);
    });
});
