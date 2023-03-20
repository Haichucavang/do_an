<?php

use Illuminate\Support\Facades\Auth;
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



Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
// Route::get('/dashboard', 'LoginController@index')->name('home');
Route::get('/home', [App\Http\Controllers\LoginController::class, 'index'])->name('home');
Route::get('/bai-viet/{id}', [App\Http\Controllers\BaivietController::class, 'show'])->name('show');
// Route::resource('category', [App\Http\Controllers\CategoryPostController::class]);
Route::get('/danh-muc/{id}', [App\Http\Controllers\DanhmucController::class, 'show'])->name('show');
Route::get('/tim-kiem', [App\Http\Controllers\HomeController::class, 'tim_kiem'])->name('home');
