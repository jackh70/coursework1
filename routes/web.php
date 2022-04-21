<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::view('details', 'details')->name('details');
Route::view('view_posts', 'view_posts')->name('view_posts');
Route::view('create_post', 'create_post')->name('create_post');
Route::view('create_comments', 'create_comments')->name('create_comments');

Route::get('/view_posts', [PostController::class, 'index'])
->name('view_posts');

Route::get('/create_post', [PostController::class, 'create'])
->name('view_posts.create');

Route::post('/create_post', [PostController::class, 'store'])
->name('view_posts.store');

Route::get('/create_comments', [CommentController::class, 'create'])
->name('create_comments.create');

Route::post('/create_comments', [CommentController::class, 'store'])
->name('create_comments.store');

Route::get('/view_posts/{id}', [PostController::class, 'show']);




require __DIR__.'/auth.php';
