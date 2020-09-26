<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        return view('hello.index', ['message'=> 'Hello!']);
    }

    public function post(Request $request)
    {
        $msg = $request->msg;
        $data = [
            'msg' => 'こんにちは' . $msg . 'さん！',
        ];
        return view('hello.index', $data);
    }
}

