<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategories extends Model
{
    protected $fillable=[
        'name',
        'code'
    ];

    public function products(){
        return $this->hasMany('App\Product','type_id');
    }
}
