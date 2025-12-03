<?php

use App\Http\Controllers\DosenController;

use App\Http\Controllers\ExamplesController;
use App\Http\Controllers\ProdukController;

use Illuminate\Support\Facades\Route;

Route::get('/dosen', [DosenController::class, 'index'])->name('dosen.index');
Route::get('/dosen/create', [DosenController::class, 'create'])->name('dosen.create');
Route::post('/dosen/store', [DosenController::class, 'store'])->name('dosen.store');








Route::get('/', [ExamplesController::class, 'getData'])->name('example.index');
Route::get('/example/create', [ExamplesController::class, 'create'])->name('example.create');
Route::post('/example', [ExamplesController::class, 'store'])->name('example.store');
Route::get('/example/edit/{id}', [ExamplesController::class, 'edit'])->name('example.edit');
Route::post('/example/update/{id}', [ExamplesController::class, 'update'])->name('example.update');
Route::get('/example/delete/{id}', [ExamplesController::class, 'destroy'])->name('example.delete');







Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
Route::get('/create', [ProdukController::class, 'create'])->name('produk.create');
Route::post('/store', [ProdukController::class, 'store'])->name('produk.store');
Route::get('/edit/{id}', [ProdukController::class, 'edit'])->name('produk.edit');
