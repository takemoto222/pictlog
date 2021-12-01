<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    //練習
    //練習
    public function index($id)
    {
        $items = User::find($id); //テストからIDを取得、idを特定 $itemsに渡す
        return view('index', ['item' => $items]);
    }
    public function create(Request $request)
    {
        $form = $request->all('name', 'age', 'profile');
        User::create($form);
        return redirect('/');
    }
    public function update(Request $request)
    {
        $form = $request->all('name', 'age', 'profile'); //nameをデータベースから全て取り出す formに渡す
        User::where('id', $request->id)->update($form); //'id', $request->idで更新するIDを特定、update($form)でnameを更新
        return redirect("/{$request->id}");
    }
    //練習


    //後
    //新規会員登録
    public function sineup()
    {
        return view('sineup');
    }
    //マイページ編集
    public function mypage_edit($id)
    {
        $items = User::find($id); //テストからIDを取得、idを特定 $itemsに渡す
        return view('mypage_edit', ['item' => $items]);
    }
    public function edit_update(Request $request)
    {
        $form = $request->all('name', 'age', 'profile'); //nameをデータベースから全て取り出す formに渡す
        User::where('id', $request->id)->update($form); //'id', $request->idで更新するIDを特定、update($form)でnameを更新
        return redirect("/{$request->id}");
    }
}
