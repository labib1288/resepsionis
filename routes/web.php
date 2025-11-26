<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuratmasukController;
use App\Http\Controllers\loginController;

Route::get('/', function () {
    return view('welcome');
});
Route::put('/surat/update-status/{id}', [SuratmasukController::class, 'updateStatus'])->name('surat.updateStatus');
Route::resource('surattamu',SuratmasukController::class);
Route::get('/arsip', [SuratmasukController::class, 'index'])->name('arsip.index');
Route::resource('surat',SuratmasukController::class);
Route::resource('login', loginController::class);
Route::get('/login', function () {
    return view('auth.login');
});