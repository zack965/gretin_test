<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get("ProductAll",[\App\Http\Controllers\ProductController::class,"ProductAll"])->name("ProductAll");
Route::get("CreateProduct",[\App\Http\Controllers\ProductController::class,"CreateProduct"])->name("CreateProduct");
Route::post("CrateProductPost",[\App\Http\Controllers\ProductController::class,"CrateProductPost"])->name("CrateProductPost");
Route::delete("DeleteProduct",[\App\Http\Controllers\ProductController::class,"DeleteProduct"])->name("DeleteProduct");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get("CatgoryAll",[\App\Http\Controllers\CategoryController::class,'CatgoryAll'])->name("CatgoryAll");
Route::get("CreateCategory",[\App\Http\Controllers\CategoryController::class,'CreateCategory'])->name("CreateCategory");
Route::post("CreateCategoryPost",[\App\Http\Controllers\CategoryController::class,'CreateCategoryPost'])->name("CreateCategoryPost");
