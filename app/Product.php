<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //protected $table = 'product';

    protected $fillable = [
        'code',
        'discount',
        'name',
        'description',
        'model',
        'color',
        'warranty_status',
        'warranty',
        'min_qty',
        'max_qty'
    ];

    public function productdetail(){
        return $this->hasMany('App\Product');
    }
}
