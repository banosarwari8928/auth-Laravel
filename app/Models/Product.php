<?php

namespace App\Models;

use App\Models\Prodetail;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function productDetail(){
        return $this->hasOne(Prodetail::class,foreignKey:"product_id");
    }
}

