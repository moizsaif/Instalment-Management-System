<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model

{
    protected $table = 'vendors';

    protected $fillable = [

        'name',
        'contact_no',
        'cnic',
        'email',
        'address',
        'iban',
    ];
}
