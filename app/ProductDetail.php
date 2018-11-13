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
        'description',
        'model',
        'color',
        'qty',
        'warranty',
        'warranty_status',
        'min_qty',
        'max_qty',
        'purchase_price',
        'selling_price',
        'discount',
        'discounted_price',
    ];

    public function product()
    {
        return $this->belongsTo('App\Product', 'pr_id');
    }
}