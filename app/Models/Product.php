<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Product extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->hasOne(Category::class);
    }

//    public function productCartRelation()
//    {
//        return $this->hasMany(Cart::class);
//    }


}
