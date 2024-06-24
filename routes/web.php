<?php

use App\Http\Controllers\login;

Route::get("/",[login::class ,"index"]) ->name("mainpage");

Route::middleware(['web'])->group(function () {
    Auth::routes();
});


Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');


