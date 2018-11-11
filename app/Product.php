<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //protected $table = 'product';

    protected $fillable = [
        'code',
        'name',
        'selling_price',
        'sold',
        'remaining'
    ];


    public function productdetail(){
        return $this->hasMany('App\Product');
    }

    public function type(){
        return $this->belongsTo('App\ProductCategories','type_id');
    }
}
