<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/* Route::get('/about', function () {
    return view('about');
}); */

Route::get('/home',[HomeController::class,'home'])->name('home');

Route::view('/about','about');

Route::get('/posts/{id}/{book?}', [HomeController::class, 'blog'])->name('posts.show');


