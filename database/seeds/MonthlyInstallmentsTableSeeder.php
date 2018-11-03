<?php

use Illuminate\Database\Seeder;

class MonthlyInstallmentsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('monthly_installments')->insert([
            [
                'plan_no' => '1',
                'no' => '101',
                'year' => '2018',
                'month' => '10',
                'due_date' => '01-10-2018',
                'amount' => '3355',
                'received_amount' => '3355',
                'status' => '1'
            ],
            [
                'plan_no' => '1',
                'no' => '102',
                'year' => '2018',
                'month' => '11',
                'due_date' => '01-11-2018',
                'amount' => '3355',
                'received_amount' => '0',
                'status' => '0'
            ],
            [
                'plan_no' => '1',
                'no' => '103',
                'year' => '2018',
                'month' => '12',
                'due_date' => '01-12-2018',
                'amount' => '3355',
                'received_amount' => '0',
                'status' => '0'
            ],
            [
                'plan_no' => '1',
                'no' => '104',
                'year' => '2018',
                'month' => '01',
                'due_date' => '01-01-2019',
                'amount' => '3355',
                'received_amount' => '0',
                'status' => '0'
            ],
            [
                'plan_no' => '1',
                'no' => '105',
                'year' => '2018',
                'month' => '02',
                'due_date' => '01-02-2019',
                'amount' => '3355',
                'received_amount' => '0',
                'status' => '0'
            ],
            [
                'plan_no' => '1',
                'no' => '106',
                'year' => '2018',
                'month' => '03',
                'due_date' => '01-03-2019',
                'amount' => '3355',
                'received_amount' => '0',
                'status' => '0'
            ],

            [
                'plan_no' => '2',
                'no' => '201',
                'year' => '2018',
                'month' => '02',
                'due_date' => '02-02-2018',
                'amount' => '25000',
                'received_amount' => '25000',
                'status' => '1'
            ],
            [
                'plan_no' => '2',
                'no' => '202',
                'year' => '2018',
                'month' => '02',
                'due_date' => '02-03-2018',
                'amount' => '25000',
                'received_amount' => '25000',
                'status' => '1'
            ]
        ]);
    }
}
