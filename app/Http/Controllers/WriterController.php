<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Writer;

class WriterController extends Controller
{
    public function index()
    {
        // DBよりWriterテーブルの値を全て取得
        $lists = Writer::all();

        // 取得した値をビュー「writer/index」に渡す
        return view('writer/index', compact('lists'));
    }
}
