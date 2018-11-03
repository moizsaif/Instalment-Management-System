<?php

use Illuminate\Database\Seeder;

class InstallmentPlansTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('installment_plans')->insert([
            [
                'no' => '100',
                'customer_no' => '1',
                'pr_no' => '1',
                'amount' => '50000',
                'additional_amount' => '250',
                'total_amount' => '40250',
                'down_payment' => '10000',
                'total_months' => '6',
                'paid_months' => '1',
                'start_date' => '01-10-2018',
                'approved_status' => '1'
            ],
            [
                'no' => '200',
                'customer_no' => '2',
                'pr_no' => '1',
                'amount' => '50000',
                'additional_amount' => '2000',
                'total_amount' => '50000',
                'down_payment' => '2000',
                'total_months' => '2',
                'paid_months' => '2',
                'start_date' => '02-02-2018',
                'approved_status' => '1'
            ]
        ]);
    }
}
