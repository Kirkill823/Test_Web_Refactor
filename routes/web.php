<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;


Route::get('/', [IndexController::class, 'show']);//Показать все

Route::get('/add', [IndexController::class, 'add']);//Добавить
Route::post('/add/complete', [IndexController::class, 'addComplete']);//Добавление данных в бд

Route::get('/search', [IndexController::class, 'search']);//Поиск
Route::post('/search/explore', [IndexController::class, 'explore'])->name('explore');//Поиск по ключу

