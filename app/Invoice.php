<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [


        'no',
        'date',
        'qty',
        'item_code',
        'total_amount',


        ];
}
