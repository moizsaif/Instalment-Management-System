<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gl_Account extends Model
{
    protected $table = 'gl_accounts';

    protected $fillable = [
        'alias',
        'code',
        'name',
        'level_number',
        'allow_transac',
        'opening_balance',
        'current_balance'
    ];

    public function glvoucherdetails(){
        return $this->hasMany('App\GLVoucherDetail');
    }
}
