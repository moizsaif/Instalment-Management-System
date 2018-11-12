<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    protected $table = 'purchase_orders';

    protected $fillable = [
        'v_id',
        'no',
        'due_date',
        ];

    public function vouchers(){
        return $this->hasMany('App\GRN', 'v_id');
    }

    public function detail()
    {
        return $this->hasMany('App\PurchaseOrderDetails', 'po_id');
    }
}
