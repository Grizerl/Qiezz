<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware([])->group(function () { Route::resource('post', PostController::class);});
