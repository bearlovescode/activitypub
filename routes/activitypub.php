<?php
    use Illuminate\Support\Facades\Route;


    Route::prefix('users/@{username}')->group(function () {
        Route::get('/', [\Bearlovescode\Activitypub\Http\Controllers\ProfileController::class, ''])
    });