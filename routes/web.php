<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TopController;
use App\Http\Controllers\PostController;



//トップページ
Route::get('/top', [TopController::class, 'top']);

//アイテムページ
//Route::get('/item_scr', [ItemController::class, 'item_scr']);
//Route::get('/item_post', [ItemController::class, 'item_post']);
//練習
//練習
//練習
//Route::get('/item_scr/{id}', [PostController::class, 'item_scr']);
//Route::post('/item_scr/create/{id}', [PostController::class, 'create']);
//Route::get('/item_scr/update/{id}', [PostController::class, 'update']);
//練習




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
