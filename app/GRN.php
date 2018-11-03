<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GRN extends Model
{protected $table = 'g_r_ns';

    protected $fillable = [
        'no',
        'status',
        'accepted_qty',
        'rejected_qty'
    ];

}
