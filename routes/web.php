<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HaloController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', [HaloController::class, 'index']);
Route::get('/about', [HaloController::class, 'about']);
Route::post('/post/simpan', [HaloController::class, 'simpan']);
Route::get('/post/hapus/{id}', [HaloController::class, 'hapus']);

Route::get('/post/edit/{id}', [HaloController::class, 'edit']);
Route::put('/post/update/{id}', [HaloController::class, 'update']);
