<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_lazada extends Model
{
    use HasFactory;
    protected $table='t_lazada';
    protected $fillable = ['Name', 'Price', 'ShopOwner', 'Image'];
}
