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
        'additional_amount',
        'total_amount',
        'down_payment',
        'total_months',
        'paid_months',
        'start_date',
        'approved_status'
    ];

    public function monthlyDetails()
    {
        return $this->hasMany('App\MonthlyInstallment', 'plan_no');
    }
}
