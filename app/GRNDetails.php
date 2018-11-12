<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GRNDetails extends Model
{
    protected $table = 'g_r_ns_details';

    protected $fillable = [
        'po_id',
        'pr_id',
        'accepted_qty',
        'rejected_qty',
    ];

    public function grn()
    {
        return $this->belongsTo('App\GRN', 'grn_id');
    }
}
