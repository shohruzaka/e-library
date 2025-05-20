<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AphorismController;
use App\Http\Controllers\MainController;
use App\Http\Middleware\IsAdmin;
use App\Models\Category;
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
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {

    // Route::post('/', [AdminController::class, 'index'])->name('dashboard');
    // Books
    Route::get('book/list', [BookController::class, 'list'])->name('book.list');
    Route::get('book/create', [BookController::class, 'create'])->name('book.create');
    Route::post('book/store', [BookController::class, 'store'])->name('book.store');
    Route::get('book/edit/{id}', [BookController::class, 'edit'])->name('book.edit');
    Route::put('book/{id}', [BookController::class, 'update'])->name('book.update');
    Route::post('book/destroy/{id}', [BookController::class, 'destroy'])->name('book.destroy');
    // Category
    Route::get('/category/list', [CategoryController::class, 'list'])->name('category.list');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('category/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::post('/category/destroy/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

    // Aphorism
    Route::get('/aphorism/list', [AphorismController::class, 'list'])->name('aphorism.list');
    Route::get('/aphorism/create', [AphorismController::class, 'create'])->name('aphorism.create');
    Route::post('/aphorism/store', [AphorismController::class, 'store'])->name('aphorism.store');
    Route::get('/aphorism/edit/{id}', [AphorismController::class, 'edit'])->name('aphorism.edit');
    Route::put('/aphorism/{id}', [AphorismController::class, 'update'])->name('aphorism.update');
    Route::post('/aphorism/destroy/{id}', [AphorismController::class, 'destroy'])->name('aphorism.destroy');
});

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/download/{id}', [MainController::class, 'download'])->name('download');

Route::match(['get', 'post'], '/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth']);

// Route::match(['get', 'post'], '/dashboardold', [MainController::class, 'adminka'])->name('adminka');





// Route::view('/pages/slick', 'pages.slick');
// Route::view('/pages/datatables', 'pages.datatables');
// Route::view('/pages/blank', 'pages.blank');
