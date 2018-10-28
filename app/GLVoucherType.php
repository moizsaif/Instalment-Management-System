<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GLVoucherType extends Model
{
    //protected $table = 'gl_voucher_type';

    protected $fillable = [
        'name',
        'code',
        'locked'
    ];

    public function vouchers(){
        return $this->hasMany('App\GLVoucher');
    }
}
