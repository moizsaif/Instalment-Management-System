<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gl_Account extends Model
{
    protected $table = 'gl_accounts';

    protected $fillable = [
        'alias',
        'code',
        'description',
        'level_number',
        'is_trans_allowed'
    ];

    public function glvouchers(){
        return $this->hasMany('App\GLVoucher');
    }
}
