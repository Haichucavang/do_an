<?php


use App\Http\Controllers\CategoryPostController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DanhmucController;
use App\Http\Controllers\BaivietController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::resource('tintucs', TintucController::class);
Route::resource('category', CategoryPostController::class);
Route::resource('post', PostController::class);
Route::resource('bai-viet', BaivietController::class);
Route::resource('danh-muc', DanhmucController::class);
