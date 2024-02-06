<?php

use App\Http\Controllers\UserController;

Route::get('/', function () {
    return redirect()->route('user.form');
});

Route::get('/user/form', [UserController::class, 'showForm'])->name('user.form');
Route::post('/user/submit', [UserController::class, 'submitForm']);


