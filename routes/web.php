<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

Route::resource('articles', ArticleController::class);

Route::post('search', [SearchController::class, 'index'])->name('search.index');

Route::redirect('/', 'articles');
