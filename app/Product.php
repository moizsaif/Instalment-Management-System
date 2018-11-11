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


    public function detail()
    {
        return $this->hasMany('App\Product');
    }
}
