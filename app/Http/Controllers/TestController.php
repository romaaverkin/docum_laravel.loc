<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function user($userId, $user2)
    {
        return view('user', compact('userId', 'user2'));
    }
}
