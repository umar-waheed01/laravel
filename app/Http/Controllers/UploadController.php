<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    function upload(Request $req) {
        $path = $req->file('file')->storeAs('public', 'file.txt');
        $fileNameArr = explode('/', $path);
        $fileName = $fileNameArr[1];
        return view('display', ['display' => $fileName]);
    }
}
