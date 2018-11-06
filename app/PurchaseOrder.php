<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    protected $table = 'purchase_orders';

    protected $fillable = [
        'no',
        'amount',
        'quantity',
        'date',
        ];
    public function vouchers(){
        return $this->hasMany('App\GRN');
    }
}
