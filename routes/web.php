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
#1 ブログ一覧の表示
Route::get('/', [PostController::class, 'index'])
    ->name('posts.index');

#2 ブログ記事の表示
Route::get('/posts/{post}', [PostController::class, 'show'])
    ->name('posts.show')
    ->where('post','[0-9]+');

#3 新規投稿ページの表示
Route::get('/posts/create', [PostController::class, 'create'])
    ->name('posts.create');
Route::post('/posts/store', [PostController::class, 'store'])
    ->name('posts.store');

#4 投稿内容編集ページの表示
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])
    ->name('posts.edit')
    ->where('post','[0-9]+');
Route::patch('/posts/{post}/update', [PostController::class, 'update'])
    ->name('posts.update')
    ->where('post','[0-9]+');

#5 投稿削除
Route::delete('/posts/{post}/destroy', [PostController::class, 'destroy'])
    ->name('posts.destroy')
    ->where('post','[0-9]+');

#6 コメントの投稿
Route::post('/posts/{post}/comments', [CommentController::class, 'store'])
    ->name('comment.store')
    ->where('post','[0-9]+');
