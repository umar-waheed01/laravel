<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use App\Models\Student;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    function list(){
       return Seller::find(1);  
    }

    function save(){
        $student = new Student();
        $student->name="bruce";
        $student->batch="121212";
        $student->email="bruce@test.com";
        if($student->save()){
            echo "NewStudent Edit";
        };
    }
}
