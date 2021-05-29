<?php
use App\Http\Controllers\ShowModel3DController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagsController;

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
Route::get('showmodel', [ShowModel3DController::class, 'index']);

Route::middleware(['auth'])->group(function(){
    Route::get('categories', [CategoryController::class, 'index']);
    Route::get('categories/create', [CategoryController::class, 'create']);
    Route::post('categories/store', [CategoryController::class, 'store']);
    Route::get('categories/edit/{id}',[CategoryController::class, 'edit']);
    Route::post('categories/update/{id}',[CategoryController::class, 'update']);
    Route::post('categories/destroy/{id}',[CategoryController::class, 'destroy']);

    Route::get('posts', [PostController::class, 'index']);
    Route::get('posts/create', [PostController::class, 'create']);
    Route::post('posts/store', [PostController::class, 'store']);
    Route::get('posts/edit/{id}',[PostController::class, 'edit']);
    Route::post('posts/update/{id}',[PostController::class, 'update']);
    Route::post('posts/destroy/{id}',[PostController::class, 'destroy']);

    Route::get('tags', [TagsController::class, 'index']);
    Route::get('tags/create', [TagsController::class, 'create']);
    Route::post('tags/store', [TagsController::class, 'store']);
    Route::get('tags/edit/{id}',[TagsController::class, 'edit']);
    Route::post('tags/update/{id}',[TagsController::class, 'update']);
    Route::post('tags/destroy/{id}',[TagsController::class, 'destroy']);
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
