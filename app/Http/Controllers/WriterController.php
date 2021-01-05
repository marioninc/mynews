<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WriterController extends Controller
{
    public function index()
    {
        // DBよりWriterテーブルの値を全て取得
        $lists = Book::all();

        // 取得した値をビュー「writer/index」に渡す
        return view('writer/index', compact('lists'));
    }
}
