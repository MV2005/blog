<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\PublicController::class, 'index']);
Route::get('/about', [\App\Http\Controllers\PublicController::class, 'about']);

Route::get('/admin/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/admin/articles/create', [ArticleController::class, 'create'])->name('articles.create');
Route::post('/admin/articles', [ArticleController::class, 'store'])->name('articles.store');
Route::get('/admin/articles/{article}', [ArticleController::class, 'edit'])->name('articles.edit');

