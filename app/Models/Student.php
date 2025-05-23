<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // public $timestamps = false;

    function getNameAttribute($val){
        return ucFirst($val);
    }

    function getEmailAttribute($val){
        return ucFirst($val);
    }

    function getBatchAttribute($val){
        return "20-".$val;
    }

    function setNameAttribute($val){
        $this->attributes["name"] = ucFirst($val);
    }

     protected $fillable = [
        'name',
        'email',
        'phone',
    ];
}
