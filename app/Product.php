<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //protected $table = 'product';

    protected $fillable = [
        'code',
        'name',
        'type_id'
    ];


    public function detail()
    {
        return $this->hasMany('App\ProductDetail', 'pr_id');
    }

    public function type(){
        return $this->belongsTo('App\ProductCategories','type_id');
    }
}
