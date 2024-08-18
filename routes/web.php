<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class,'index'])->name ( 'posts.index')  ;
Route::get('/create', [HomeController::class,'create']);

Route::post('/', [HomeController::class,'store'] )->name ( 'posts.store')  ;

Route::get('/posts/{post}', [HomeController::class,'show'])->name ( 'posts.show');

Route::get('/{post}/edit', [HomeController::class,'edit']);

Route::put('/{post}', [HomeController::class,'update'])->name ( 'posts.update');

Route::delete('/posts/{post}', [HomeController::class,'destroy'])->name ( 'posts.destroy');

