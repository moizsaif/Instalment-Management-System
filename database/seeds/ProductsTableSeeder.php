<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            [
                'code' => 'white',
                'discount' => '0',
                'name' => 'Laptop',
                'description' => 'HP Envy 15 Core-i7 8GB 1TB',
                'model' => 'j-132TX',
                'color' => 'Silver',
                'warranty' => '12',
                'warranty_status' => '1',
                'min_qty' => '2',
                'max_qty' => '8'
            ]
        ]);
    }
}
