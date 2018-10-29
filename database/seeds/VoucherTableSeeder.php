<?php

use Illuminate\Database\Seeder;

class VoucherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gl_vouchers')->insert([
            [
                'no'=>'51',
                'type_id'=>'1',
                'voucher_date'=>'2018-10-12',
                'year'=>'2018',
                'month'=>'Oct',
                'amount'=>'5000',
                'is_approved'=>'1',
                'created_by'=>'Saad Akmal',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'no'=>'55',
                'type_id'=>'2',
                'voucher_date'=>'2018-10-20',
                'year'=>'2018',
                'month'=>'Oct',
                'amount'=>'2500',
                'is_approved'=>'1',
                'created_by'=>'Saad Akmal',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'no'=>'59',
                'type_id'=>'3',
                'voucher_date'=>'2018-11-12',
                'year'=>'2018',
                'month'=>'Nov',
                'amount'=>'8000',
                'is_approved'=>'0',
                'created_by'=>'Moiz Saif',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'no'=>'25',
                'type_id'=>'4',
                'voucher_date'=>'2018-12-12',
                'year'=>'2018',
                'month'=>'Dec',
                'amount'=>'5500',
                'is_approved'=>'1',
                'created_by'=>'Adil Ashfaq',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
