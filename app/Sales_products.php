<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales_products extends Model
{
    public function sales()
    {
        return $this->belongsTo('App\Sales', 'sales_id');
    }

    public function product()
    {
        return $this->belongsTo('App\Products', 'product_id');
    }
}
