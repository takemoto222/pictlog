<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TopController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;


//ログイン
Route::get('/login', [TopController::class, 'login']);
//トップページログアウト
Route::get('/logout_top', [TopController::class, 'logout_top']);
//トップページ
Route::get('/top', [TopController::class, 'top']);

//アイテムページ
Route::get('/item_scr', [PostController::class, 'item_scr']);
//create
Route::get('/item_add', [PostController::class, 'item_add']);
Route::post('/item_add', [PostController::class, 'item_create']);





//index マイページ
//Route::get('/{id}', [UserController::class, 'index']);
//Route::post('/create/{id}', [UserController::class, 'create']);
////Route::get('/update/{id}', [UserController::class, 'update']);
//練習


//後
//マイページ編集
//Route::get('/mypage_edit/{id}', [UserController::class, 'mypage_edit']);
//Route::post('/edit_update/{id}', [UserController::class, 'edit_update']);
//画像

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
