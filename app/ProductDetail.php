<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model

{
    //protected $table = 'productdetails';

    protected $fillable = [
        'pr_id',
        'grn_id',
        'v_id',
        'qty',
        'rem_qty',
        'sold_qty',
        'warranty',
        'warranty_status',
        'purchase_price',
        'discount',
    ];

    public function product()
    {
        return $this->belongsTo('App\Product', 'pr_id');
    }
}