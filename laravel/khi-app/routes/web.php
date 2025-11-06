<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/welcome', [AuthController::class, 'welcome'])->name('welcome');

Route::get('/table', function () {
    return view('table');
});
Route::get('/data-tables', function () {
    return view('data-tables');
});

Route::get('/cast', [CastController::class, 'index'])->name('cast.index');
Route::get('/cast/create', [CastController::class, 'create'])->name('cast.create');
Route::post('/cast', [CastController::class, 'store'])->name('cast.store');
Route::get('/cast/{cast_id}', [CastController::class, 'show'])->name('cast.show');
Route::get('/cast/{cast_id}/edit', [CastController::class, 'edit'])->name('cast.edit');
Route::put('/cast/{cast_id}', [CastController::class, 'update'])->name('cast.update');
Route::delete('/cast/{cast_id}', [CastController::class, 'destroy'])->name('cast.destroy');