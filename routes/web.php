<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProSubCategoryController;
use App\Http\Controllers\SubCategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[CategoryController::class, 'index'])->name('category');
Route::post('/category/add',[CategoryController::class, 'add'])->name('category.add');

Route::get('/subcategory',[SubCategoryController::class, 'index'])->name('subcategory');
Route::post('/subcategory/add',[SubCategoryController::class, 'add'])->name('subcategory.add');

Route::get('/prosubcategory', [ProSubCategoryController::class, 'index'])->name('prosubcategory');
Route::post('/prosubcategory/add', [ProSubCategoryController::class, 'add'])->name('prosubcategory.add');
Route::post('/feach-subcategory', [ProSubCategoryController::class, 'feachsubCategory']);

Route::post('/opy', [ProSubCategoryController::class, 'ok']);



