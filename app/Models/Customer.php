<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public function customerCartRelation()
    {
        return $this->hasOne(Cart::class);
    }

    public function customerAdressRelation()
    {
        return $this->hasMany(Adress::class);
    }



}
