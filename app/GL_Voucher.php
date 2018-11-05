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
        'created_by',
        'type_id'
    ];

    public function type(){
        return $this->belongsTo('App\GLVoucherType');
    }
    public function details(){
        return $this->hasMany('App\GLVoucherDetail','voucher_id');
    }
}
