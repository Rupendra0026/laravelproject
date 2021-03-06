<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/post', [postcontroller::class, 'index'])->name('post_index');
Route::post('/post', [postcontroller::class, 'create'])->name('post_create');
Route::get('/dashboard',[DashboardController::class, 'show_post'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
