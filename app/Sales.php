<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    public function product()
    {
        return $this->hasMany('App\Sales_products', 'sales_id');
    }

    public function payment()
    {
        return $this->hasMany('App\Sales_payment', 'sales_id');
    }
}
