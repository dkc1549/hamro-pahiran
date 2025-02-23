<?php

use App\Http\Controllers\Frontend\HomeController as FrontendHomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Route::get('/', function () {
//     return view('welcome');
// });

require __DIR__ . "/admin.php";
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [FrontendHomeController::class, 'index'])->name('index');
Route::get('/shop', [FrontendHomeController::class, 'shop'])->name('shop');
Route::get('/blog',[FrontendHomeController::class, 'blog'])->name('blog');
Route::get('/contact', [FrontendHomeController::class, 'contact'])->name('contact');
