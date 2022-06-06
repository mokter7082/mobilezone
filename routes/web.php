<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\MobileController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index']);


Route::get('/admin', [AdminController::class, 'index']);

Route::get('/add-category', [CategoryController::class, 'index'])->name('add-category');
Route::post('/save-category', [CategoryController::class, 'saveCategory'])->name('save-category');
Route::get('all-category', [CategoryController::class, 'allCategory'])->name('all-category');

Route::get('/add-brand', [BrandController::class, 'create'])->name('add-brand');
Route::post('save-brand', [BrandController::class, 'store'])->name('save-brand');
Route::get('all-brand', [BrandController::class, 'index'])->name('all-brand');

Route::get('/add-mobile', [MobileController::class, 'create'])->name('add-mobile');
Route::post('/store-mobile', [MobileController::class, 'store'])->name('store-mobile');
Route::get('/all-mobile', [MobileController::class, 'index'])->name('all-mobile');
Route::get('/show-mobile/{id}', [MobileController::class, 'show'])->name('show-mobile');


