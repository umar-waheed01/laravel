<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function product(){
        $product = new Product();
        // $product->seller_id = 2;
        $product->iphone="i7" ;
        $product->android="vivo 21e" ;
        $product->samsung="samsung s24";
        if($product->save()){
            echo "New product added";
        };
    }
}
