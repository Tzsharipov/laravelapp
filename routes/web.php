<?php

use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use function Laravel\Prompts\search;


// Route::get('/', function () {
//     return view('welcome');
// });   
Route:: get('/', [HomeController::class, 'index'])->name('home.index');
Route:: get('/test', [HomeController::class, 'test'])->name('home.test');
Route:: get('/contact', [HomeController::class, 'contact'])->name('home.contact');


