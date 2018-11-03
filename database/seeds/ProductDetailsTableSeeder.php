<?php

use Illuminate\Database\Seeder;

class ProductDetailsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('product_details')->insert([
            [
                'pr_id' => '1',
                'grn_id' => '1',
                'v_id' => '1',
                'qty' => '5',
                'sold' => '1',
                'remaining' => '4',
                'purchase_price' => '48500',
                'selling_price' => '50000',
                'discounted_price' => '49500'
            ],
            [
                'pr_id' => '1',
                'grn_id' => '1',
                'v_id' => '1',
                'qty' => '8',
                'sold' => '3',
                'remaining' => '5',
                'purchase_price' => '48300',
                'selling_price' => '50000',
                'discounted_price' => '49500'
            ]
        ]);
    }
}
