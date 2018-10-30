<?php

use Illuminate\Database\Seeder;

class VoucherTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('g_l_voucher_types')->insert([[
            'name'=>'Sale Receipt Voucher',
            'code'=>'SRV',
            'locked'=>'1',
            'last_serial_no'=>'10001',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
            'name'=>'Supplier Payment Voucher',
            'code'=>'SPV',
            'locked'=>'1',
            'last_serial_no'=>'20001',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
            'name'=>'Bank Payment Voucher',
            'code'=>'BPV',
            'locked'=>'0',
            'last_serial_no'=>'30001',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
            'name'=>'General Voucher',
            'code'=>'GV',
            'locked'=>'0',
            'last_serial_no'=>'40001',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
            'name'=>'Cash Receive Voucher',
            'code'=>'CRV',
            'locked'=>'0',
            'last_serial_no'=>'50001',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]

        ]);
    }
}
