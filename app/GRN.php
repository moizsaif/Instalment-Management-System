<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GRN extends Model
{
    protected $table = 'g_r_ns';

    protected $fillable = [
        'no',
        'status',
        'received_by',
        'checked_by',
    ];



    public function detail()
    {
        return $this->hasMany('App\GRNDetail', 'grn_id');
    }
}
