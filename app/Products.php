<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use SoftDeletes;

    public function sales_product()
    {
        return $this->hasMany('App\Sales_product', 'product_id');
    }
}
