<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Home;
use App\Http\Controllers\User;
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

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/home', [Home::class, 'index'])->name('home');
Route::get('/users', [User::class, 'index'])->name('user.all');
Route::get('/users/{id}', [User::class, 'show'])->where(['id' => '[0-9]+'])->name('user.show');
Route::get('/users/create', [User::class, 'create'])->name('user.create');
Route::post('/users/create', [User::class, 'store']);

Route::get('/article', [ArticleController::class, 'index'])->name('article.all');
Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
Route::post('/article/create', [ArticleController::class, 'store']);

Route::get('/article/{id}', [ArticleController::class, 'show'])->name('article.show');
Route::get('/article/{article}/edit', [ArticleController::class, 'edit'])->name('article.edit');
Route::put('/article/{article}/edit', [ArticleController::class, 'update']);

Route::get('/category', [CategoryController::class, 'index'])->name('category.all');
Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.show');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category/create', [CategoryController::class, 'store']);

Route::get('/redirect', function () {
    return redirect()->route('index')->with('success', "redirection");
});
