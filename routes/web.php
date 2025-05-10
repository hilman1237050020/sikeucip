<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingpage');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [SesiController::class, 'index'])->name('login');
    Route::post('/login', [SesiController::class, 'login']);
});

Route::get('/home', function () {
    return redirect('/admin');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin/administrator', [AdminController::class, 'administrator'])->middleware('userAkses:operator');
    Route::get('/admin/bendaharaop', [AdminController::class, 'bendaharaop'])->middleware('userAkses:bendaharaop');
    Route::get('/admin/bendaharadapur', [AdminController::class, 'bendaharadapur'])->middleware('userAkses:bendaharadapur');
    Route::get('/admin/pengurus', [AdminController::class, 'pengurus'])->middleware('userAkses:pengurus');
    Route::get('/admin/orangtua', [AdminController::class, 'orangtua'])->middleware('userAkses:orangtua');
    Route::get('/admin/pimpinanpesantren', [AdminController::class, 'pimpinanpesantren'])->middleware('userAkses:pimpinanpesantren');
    Route::get('/logout', [SesiController::class, 'logout']);
});

Route::get('/cekgambar', function () {
    return view('cekgambar');
});
