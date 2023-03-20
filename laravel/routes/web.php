<?php

use App\Http\Controllers\HelloController;
use App\Http\Controllers\PostController;
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

// Route::get('hai', function () {
//     echo "Hai";
// });

// Route::get('hello', 'App\Http\Controllers\HelloController@index');

// Route::get('welcome', [HelloController::class, 'welcome']);

// Route::resource('posts', PostController::class);

Route::get('posts', [PostController::class, 'index']);

Route::get('posts/create', [PostController::class, 'create']);

Route::get('posts/trash', [PostController::class, 'trash']);

Route::get('posts/{slug}', [PostController::class, 'show']);

Route::post('posts', [PostController::class, 'store']);

Route::get('posts/{slug}/edit', [PostController::class, 'edit']);

Route::patch('posts/{slug}', [PostController::class, 'update']);

Route::delete('posts/{slug}', [PostController::class, 'destroy']);

Route::delete('posts/{slug}/permanent', [PostController::class, 'permanent_delete']);

Route::delete('posts/{slug}/restore', [PostController::class, 'restore']);


