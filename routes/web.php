<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TopController;



//トップページ
Route::get('/top', [TopController::class, 'top']);
//練習
//Route::get('/', [TestController::class, 'index']);

Route::get('/{id}', [UserController::class, 'index']);
Route::post('/create/{id}', [UserController::class, 'create']);
Route::get('/update/{id}', [UserController::class, 'update']);
//練習


//後
//マイページ編集
Route::get('/mypage_edit/{{ $item->id }}', [UserController::class, 'mypage_edit']);
Route::post('/edit_update/{id}', [UserController::class, 'update']);
//画像
