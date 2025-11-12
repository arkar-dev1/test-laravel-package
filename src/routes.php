<?php

use Illuminate\Support\Facades\Route;

Route::prefix('axess')
    ->group(function () {
        Route::get(config('axess.endpoint'), function () {
            return view('axess::index');
        });
    });
