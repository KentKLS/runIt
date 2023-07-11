<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public function cartProductRelation()
    {
        return $this->hasMany(Product::class);
    }

    public function cartCustomerRealtion()
    {
        return $this->hasOne(Customer::class);
    }

}
