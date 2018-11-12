<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            [
                'type_id' => '1',
                'code' => '1-001',
                'name' => 'Sony 32 inch'
            ],
            [
                'type_id' => '2',
                'code' => '2-001',
                'name' => 'Samsung Inverter Smart Machine'
            ],
            [
                'type_id' => '3',
                'code' => '3-001',
                'name' => 'Haier 1.5Ton Inverter'
            ]
        ]);
    }
}
