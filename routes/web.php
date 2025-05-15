<?php

use Illuminate\Support\Facades\Route;

$basePath = env('APP_BASE_PATH', '');

Route::prefix($basePath)->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
});
