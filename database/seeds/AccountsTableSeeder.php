<?php

use Illuminate\Database\Seeder;

class AccountsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('gl_accounts')->insert([
            [
                'code'=>'01-01-01-0001',
                'opening_balance'=>'65000',
                'description'=>'Cash in Hand',
                'level_no'=>'4',
                'allow_transac'=>'1',
                'alias'=>'Cash',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code'=>'01-01-01-0002',
                'opening_balance'=>'85000',
                'description'=>'Cash on Warehouse',
                'level_no'=>'4',
                'allow_transac'=>'1',
                'alias'=>'Cash',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code'=>'01-02-01-0003',
                'opening_balance'=>'150000',
                'description'=>'Adil Ashfaq',
                'level_no'=>'4',
                'allow_transac'=>'1',
                'alias'=>'Customers',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
            ,[
                'code'=>'01-01-01',
                'opening_balance'=>'',
                'description'=>'Cash',
                'level_no'=>'3',
                'allow_transac'=>'0',
                'alias'=>'Cash',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
