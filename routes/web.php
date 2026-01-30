<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get ('/index',[ PostController::class,'index'])->name ('index');
Route::post ('/store',[ PostController::class,'store'])->name ('poste.Store');
Route::get('/create', [PostController::class, 'create'])->name('create.post');
