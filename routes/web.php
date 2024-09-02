<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', [HomeController::class, 'homePos']);

Route::get('/category/food-beverage', [ProductsController::class, 'foodBeverage']);
Route::get('/category/beauty-health', [ProductsController::class, 'beautyHealth']);
Route::get('/category/home-care', [ProductsController::class, 'homeCare']);
Route::get('/category/baby-kid', [ProductsController::class, 'babyKid']);

Route::get('/user/{id}/name/{name}', [UserController::class, 'tampilPengguna']);

Route::get('/penjualan', [PenjualanController::class, 'halamanPenjualan']);

Route::resource('photos', PhotoController::class)->only([
    'index',
    'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create',
    'store',
    'update',
    'destroy'
]);

Route::get('/hello', [WelcomeController::class, 'hello']);

Route::get('/about', [AboutController::class, 'about']);

Route::get('/articles/{id}', [ArticleController::class, 'articles']);

Route::get('/world', function () {
    return 'World';
});


Route::get('/user/{name}', function ($name) {
    return 'Nama saya ' . $name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});


Route::get('/user/{name?}', function ($name = "John") {
    return 'Nama saya ' . $name;
});


Route::get('/greeting', [WelcomeController::class, 'greeting']);
