<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RequestSampleController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('post/show_image', [PostController::class, 'show_image'])->name('post.show_image');
// Route::get('post/show/{post}', [PostController::class, 'show'])->name('post.show');
//編集機能
// Route::get('posr/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
// Route::patch('post/{post}', [PostController::class, 'update'])->name('post.update');
//削除機能
// Route::delete('post/{post}', [PostController::class, 'destroy'])->name('post.destroy');
//リクエスト
Route::get('/form', [RequestSampleController::class, 'form']);
Route::get('/query-strings', [RequestSampleController::class, 'querystrings']);
Route::get('/users/{id}', [RequestSampleController::class, 'profile'])->name(name: 'profile');
Route::get('/route-link', [RequestSampleController::class, 'routelink']);
Route::get('/products/{category}/{year}', [RequestSampleController::class, 'productsArchive']);

route::get('/logins', [RequestSampleController::class, 'loginForm']);
route::post('/logins', [RequestSampleController::class, 'logins'])->name('logins');

//リソースコントローラー
route::resource('/events', EventController::class)->only(['index', 'create', 'store']);
Route::resource('post', PostController::class);

//index
// Route::get('/', fn() => view('index'));
//トップページ
Route::get('/', function () { return view('welcome');});
// Route::get('/', function () { return view('index2');});

// 通常のダッシュボードメニュー
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

//ダッシュボードのレイアウト変更用のルート
Route::get('/dashboard', [PostController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';