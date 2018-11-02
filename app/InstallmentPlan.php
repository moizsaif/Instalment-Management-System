<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InstallmentPlan extends Model
{
    //protected $table = 'installment_plans';

    protected $fillable = [
        'no',
        'month',
        'amount',
        'received_amount',
        'additional_amount',
        'total_amount',
        'down_payment',
        'total_months',
        'paid_months',
        'start_year',
        'start_month',
        'approved_status'
    ];
}
