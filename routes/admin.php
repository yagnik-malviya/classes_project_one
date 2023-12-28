<?php

use App\Http\Controllers\admin\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('test', [DashboardController::class, 'test'])->name('test');
