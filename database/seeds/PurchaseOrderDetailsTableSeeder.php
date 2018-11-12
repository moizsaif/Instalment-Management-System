<?php

use Illuminate\Database\Seeder;

class PurchaseOrderDetailsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('purchase_order_details')->insert([
            [
                'po_id' => '1',
                'pr_id' => '1',
                'rate' => '0',
                'total_quantity' => '0',
                'remaining_quantity' => '0',
            ]
        ]);
    }
}
