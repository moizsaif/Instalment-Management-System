<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GLVoucherDetail extends Model
{
    protected $table = 'gl_voucher_details';

    protected $fillable = [
        'acc_id',
        'voucher_no',
        'debit',
        'credit',
        'cheque_no',
        'cheque_date',
        'payee'
    ];

    public function voucher(){
        return $this->belongsTo('App\GL_Voucher','voucher_id');
    }
    public function account(){
        return $this->belongsTo('App\GL_Account','acc_id');
    }
}
