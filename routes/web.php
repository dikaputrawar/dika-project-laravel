<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



// Route::get('/index', function () {
//     return view('index'); 
// });

// Route::get('/welcome', function () {
//     return view('welcome');
// });


// Route::get('/about', function () {
//     return view('about');
// });


// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/', [Homecontroller::class, 'index'])->name('home');
Route::get('/about', [Homecontroller::class, 'about'])->name('about');
Route::get('/login', [Homecontroller::class, 'login'])->name('login');