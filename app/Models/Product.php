<?php

namespace App\Models;

use App\Models\prodetail;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function productDetail(){
        return $this->hasOne(prodetail::class,foreignKey:"product_id");
    }
}

