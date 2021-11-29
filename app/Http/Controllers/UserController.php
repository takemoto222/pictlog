<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    //練習
    public function test()
    {
        $item = [
            'content' => '本文',
        ];
        return view('test', $item);
    }
}
