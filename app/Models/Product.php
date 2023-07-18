<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded =['id', 'updated_at', 'created_at' ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function cartItem(){
        return $this->hasMany(CartItem::class);
    }

    public function orders(){
        return $this->belongsToMany(Order::class)->withPivot(['quantity']);
    }
}
