<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use SoftDeletes;

    public function sales_payment()
    {
        return $this->hasMany('App\Sales_payment', 'payment_id');
    }
}
