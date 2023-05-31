<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producttype extends Model
{
    use HasFactory;
    protected $table ="type_products";

    public function products(){ //tên bản đặt tên nào cũng đc
        return $this->hasMany('App\product'); //Moder hasMany : một nhiều

    }
}
