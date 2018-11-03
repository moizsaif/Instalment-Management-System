<?php

use Illuminate\Database\Seeder;

class VendorsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('vendors')->insert([
            [
                'name' => 'Samsung',
                'contact_no' => '0423-5559999',
                'cnic' => '',
                'email' => 'samsung@gmail.com',
                'address' => '2B Hafeez Center, Main Boulevard Gulberg, Lahore',
                'iban' => 'PK79MEZN5599887744556633',
            ]
        ]);
    }
}
