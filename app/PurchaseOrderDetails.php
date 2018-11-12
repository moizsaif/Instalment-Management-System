<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrderDetails extends Model
{
    //protected $table = 'purchase_order_details';

    protected $fillable = [
        'po_id',
        'pr_id',
        'rate',
        'total_quantity',
        'remaining_quantity',
    ];

    public function purchaseOrder()
    {
        return $this->belongsTo('App\PurchaseOrder', 'po_id');
    }
}
