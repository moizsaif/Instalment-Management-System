<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GL_Voucher extends Model
{
    protected $table = 'gl_vouchers';

    public function glaccounts(){
        return $this->belongsTo('App\GLAccount');
    }
}
