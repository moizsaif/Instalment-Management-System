<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //protected $table = 'product';

    protected $fillable = [
        'code',
        'name',
        'type_id',

        'description',
        'model',
        'color',
        'min_qty',
        'max_qty',
        'selling_price',
        'discounted_price',
    ];


    public function detail()
    {
        return $this->hasMany('App\ProductDetail', 'pr_id');
    }

    public function type(){
        return $this->belongsTo('App\ProductCategories','type_id');
    }

    public function brand()
    {
        return $this->belongsTo('App\Brand', 'brand_id');
    }

    public function data($id)
    {
        $product = Product::findOrFail($id);
        return $product;
    }
}
