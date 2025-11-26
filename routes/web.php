<?php

use App\Http\Controllers\DosenController;

use App\Http\Controllers\ExamplesController;
use App\Http\Controllers\ProdukController;

use Illuminate\Support\Facades\Route;

Route::get('/dosen', [DosenController::class, 'index'])->name('dosen.index');










Route::get('/', [ExamplesController::class, 'getData'])->name('example.index');
Route::get('/example/create', [ExamplesController::class, 'create'])->name('example.create');
Route::post('/example', [ExamplesController::class, 'store'])->name('example.store');
Route::get('/example/edit/{id}', [ExamplesController::class, 'edit'])->name('example.edit');
Route::post('/example/update/{id}', [ExamplesController::class, 'update'])->name('example.update');
Route::get('/example/delete/{id}', [ExamplesController::class, 'destroy'])->name('example.delete');







Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
