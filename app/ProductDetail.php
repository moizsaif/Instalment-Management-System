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
        'sold',
        'remaining',
        'purchase_price',
        'selling_price',
        'discounted_price'
    ];
    public function productdetail(){
        return $this->hasMany('App\ProductDetails');
    }
}