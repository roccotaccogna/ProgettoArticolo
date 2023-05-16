<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;

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

Route::get('/', [PublicController::class,'welcome'])->name('welcome');

Route::get('/articolo/create', [ArticleController::class,'create'])->name('articolo.create');

Route::post('/articolo/create/store', [ArticleController::class, 'store'])->name('articolo.store');

Route::get('/articolo', [ArticleController::class, 'index'])->name('articolo.index');

Route::get('/articolo/show/{articles}', [ArticleController::class, 'show'])->name('articolo.show');

Route::get('/articolo/edit/{articles}', [ArticleController::class, 'edit'])->name('articolo.edit');

Route::put('/articolo/update/{articles}', [ArticleController::class, 'update'])->name('articolo.update');

Route::delete('articolo/delete/{articles}', [ArticleController::class, 'destroy'])->name('articolo.delete');

Route::get('/profile', [PublicController::class, 'profile'])->name('profile');

Route::get('/author/list/{user}', [PublicController::class, 'authorList'])->name('author.articles');