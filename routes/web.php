<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\IndexController;

// Home route
Route::get('/', [BookController::class, 'indexs']);
Route::get('/baca/{id}', [BookController::class, 'show'])->name('books.show');
Route::get('/blog', [BlogController::class, 'index']);


// Rute untuk BookController
Route::get('/tabel', [BookController::class, 'index'])->name('books.index');
Route::get('/add', [BookController::class, 'create'])->name('books.create');
Route::post('/add', [BookController::class, 'store'])->name('books.store');
Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::put('/edit/{book}', [BookController::class, 'update'])->name('books.update');
Route::delete('/delete/{book}', [BookController::class, 'destroy'])->name('books.destroy');

Route::resource('books', BookController::class)->except(['index', 'create', 'store', 'edit', 'update', 'destroy']);
