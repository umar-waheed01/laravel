<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    //
    function upload(Request $request) {
        $path = $request->file('file')->store('images', 'public');
        $pathArr = explode('/', $path);
        $imagePath = $pathArr[1];
        $img = new Image();
        $img->path = $imagePath;
        if ($img->save()){
            return redirect('displayImage');
        }else{
            return "Image not uploaded";
        }
    }

    function displayImage() {
        $images = Image::all();
        return view('image-display', ['images' => $images]);
    }
}
