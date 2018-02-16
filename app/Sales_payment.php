<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales_payment extends Model
{
    public function sales()
    {
        return $this->belongsTo('App\Sales', 'sales_id');
    }

    public function payment()
    {
        return $this->belongsTo('App\Payment', 'payment_id');
    }
}
