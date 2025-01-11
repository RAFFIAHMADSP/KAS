<?php

use App\Http\Controllers\Auth\userController;
use App\Http\Middleware\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['guest'])->group(function(){
    Route::get('/admin/login',[userController::class, "login"])->name('admin.login');
    Route::post('/admin/submit',[userController::class, "submit"])->name('admin.submit');
});

Route::middleware('role:bendahara')->group(function () {
    // Route::get('/bendahara/dashboard', [BendaharaController::class, 'dashboard'])->name('bendahara.dashboard');
});

Route::middleware('role:siswa')->group(function () {
    // Route::get('/siswa/dashboard', [SiswaController::class, 'dashboard'])->name('siswa.dashboard');
});
