<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Example Routes

Route::view('/newdashboard','admin.layouts.app');
Route::get('/',[MainController::class,'index'])->name('home');

Route::match(['get', 'post'], '/dashboard', [MainController::class, 'adminka'])->name('adminka');

Route::resource('/books',BookController::class);  

Route::get('/category/create', [CategoryController::class,'create'])->name('category.create');

Route::post('/category/store', [CategoryController::class,'store'])->name('category.store');
Route::post('/category/destroy/{id}', [CategoryController::class,'destroy'])->name('category.destroy');
// Route::view('/pages/slick', 'pages.slick');
// Route::view('/pages/datatables', 'pages.datatables');
// Route::view('/pages/blank', 'pages.blank');
