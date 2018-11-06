<?php

use Illuminate\Database\Seeder;

class VoucherDetailsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('gl_voucher_details')->insert([
            [
                'voucher_id'=>'1',
                'acc_id'=>'1',
                'debit'=>'2500',
                'credit'=>'',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'voucher_id'=>'1',
                'acc_id'=>'2',
                'debit'=>'',
                'credit'=>'2500',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'voucher_id'=>'2',
                'acc_id'=>'1',
                'debit'=>'',
                'credit'=>'500',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'voucher_id'=>'2',
                'acc_id'=>'3',
                'debit'=>'1500',
                'credit'=>'',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'voucher_id'=>'2',
                'acc_id'=>'4',
                'debit'=>'',
                'credit'=>'2580',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'voucher_id'=>'3',
                'acc_id'=>'4',
                'debit'=>'',
                'credit'=>'1500',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'voucher_id'=>'3',
                'acc_id'=>'2',
                'debit'=>'2580',
                'credit'=>'',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'voucher_id'=>'4',
                'acc_id'=>'1',
                'debit'=>'',
                'credit'=>'6500',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'voucher_id'=>'4',
                'acc_id'=>'4',
                'debit'=>'8580',
                'credit'=>'',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'voucher_id'=>'5',
                'acc_id'=>'2',
                'debit'=>'10000',
                'credit'=>'',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
