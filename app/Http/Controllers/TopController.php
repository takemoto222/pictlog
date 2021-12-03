<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TopController extends Controller
{
    public function top()
    {
        return view('top');
    }
}
