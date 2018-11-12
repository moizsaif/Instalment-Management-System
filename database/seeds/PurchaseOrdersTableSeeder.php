<?php

use Illuminate\Database\Seeder;

class PurchaseOrdersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('purchase_orders')->insert([
            [
                'v_id' => '1',
                'no' => '1',
                'due_date' => '01-01-2018'
            ]
        ]);
    }
}
