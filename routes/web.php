<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TopController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;


//ログイン
Route::get('/login', [TopController::class, 'login']);
//新規登録
Route::get('/register', [TopController::class, '/register']);
//トップページログアウト
Route::get('/logout_top', [TopController::class, 'logout_top'])->name('logout_top');
//トップページ
Route::group(
  ['middleware' => 'auth'],
  function () {
    Route::get('/top', [TopController::class, 'top'])->name('top');
  }
);
//投稿ページ

Route::group(
  ['middleware' => 'auth'],
  function () {
    Route::get('/item_scr', [PostController::class, 'item_scr'])->name('item_scr');
    //create
    Route::get('/item_add', [PostController::class, 'item_add'])->name('item_add');
    Route::post('/item_add', [PostController::class, 'item_create'])->name('item_create');
    Route::post('/item_scr/delete', [PostController::class, 'delete'])->name('item_scr.delete');
  }
);





//index マイページ
Route::group(
  ['middleware' => 'auth'],
  function () {
    Route::get('/{id}', [UserController::class, 'index'])->name('index');
    Route::post('/create/{id}', [UserController::class, 'create']);
    Route::get('/update/{id}', [UserController::class, 'update']);
  }
);
//練習


//後
//マイページ編集
Route::group(
  ['middleware' => 'auth'],
  function () {
    Route::get('/mypage_edit/{id}', [UserController::class, 'mypage_edit'])->name('mypage_edit');
    Route::post('/edit_update/{id}', [UserController::class, 'edit_update'])->name('edit_update');
  }
);
//画像




//認証
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
