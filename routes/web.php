<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TopController;
use App\Http\Controllers\PostController;



//トップページ
Route::get('/top', [TopController::class, 'top']);

//アイテムページ
Route::get('/item_scr', [PostController::class, 'item_scr']);
Route::get('/item_post', [PostController::class, 'item_post']);





//index マイページ
Route::get('/{id}', [UserController::class, 'index']);
Route::post('/create/{id}', [UserController::class, 'create']);
Route::get('/update/{id}', [UserController::class, 'update']);
//練習


//後
//マイページ編集
Route::get('/mypage_edit/{id}', [UserController::class, 'mypage_edit']);
Route::post('/edit_update/{id}', [UserController::class, 'edit_update']);
//画像
