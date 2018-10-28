<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GLVoucherDetail extends Model
{
    protected $table = 'gl_voucher_details';

    protected $fillable = [
        'debit',
        'credit',
        'cheque_no',
        'cheque_date',
        'payee'
    ];

    public function voucher(){
        return $this->belongsTo('App\GLVoucher');
    }
    public function account(){
        return $this->belongsTo('App\GLAccount');
    }
}
