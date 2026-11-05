<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/wie-zijn-wij', [PageController::class, 'about'])->name('about');
Route::get('/themas/{dimension}', [PageController::class, 'theme'])->name('theme');
Route::get('/mdls', [PageController::class, 'mdls'])->name('mdls');
Route::get('/achtergrond', [PageController::class, 'background'])->name('background');
Route::get('/matrix', [PageController::class, 'matrix'])->name('matrix');
Route::get('/matrix/download', [PageController::class, 'matrixDownload'])->name('matrix.download');