<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::controller(UserController::class)->name('users.')->group(function () {
    Route::post('client-token', 'clientToken')->name('client-token');
});
