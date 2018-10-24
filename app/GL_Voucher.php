<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GL_Voucher extends Model
{
    protected $table = 'gl_vouchers';

    protected $fillable = [
        'code',
        'voucher_date',
        'is_approved',
        'created_by'
    ];

    public function glaccounts(){
        return $this->belongsTo('App\GLAccount');
    }
}
