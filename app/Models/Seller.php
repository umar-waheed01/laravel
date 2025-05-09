<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    //
    protected $table = 'Seller';

    function productData() {
        return $this->hasOne('App\Models\Product');
    }
}
