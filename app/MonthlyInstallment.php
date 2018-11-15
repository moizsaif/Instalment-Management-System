<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MonthlyInstallment extends Model
{
    //protected $table = 'monthly_installments';

    protected $fillable = [
        'amount',
        'due_date',
        'month',
        'plan_no',
        'received_amount',
        'status',
        'year'
    ];

    public function plan()
    {
        return $this->belongsTo('App\InstallmentPlan', 'plan_no');
    }
}
