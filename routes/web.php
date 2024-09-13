<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('form.index');
});

Route::get('signin', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('action-login', [\App\Http\Controllers\LoginController::class, 'actionLogin'])->name('action-login');
Route::get('logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

Route::resource('dashboard', \App\Http\Controllers\DashboardController::class);
Route::resource('roles', \App\Http\Controllers\LevelController::class);
Route::resource('users', \App\Http\Controllers\UserController::class);
Route::resource('jurusan', \App\Http\Controllers\JurusanController::class);
Route::resource('gelombang', \App\Http\Controllers\GelombangController::class);
Route::put('updategelombang/{id}', [App\Http\Controllers\GelombangController::class, 'updateStatus'])->name('updateStatus');
