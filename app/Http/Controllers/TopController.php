<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TopController extends Controller
{
    public function top($id)
    {
        $items = User::find($id); //テストからIDを取得、idを特定 $itemsに渡す
        return view('top', ['item' => $items]);
    }
    public function logout_top()
    {
        return view('logout_top');
    }
}
