<?php

use Illuminate\Database\Seeder;

class GRNsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('g_r_ns')->insert([
            [
                'no' => '1-001',
                'status' => '1',
                'received_by' => 'Moiz',
                'checked_by' => 'Adil',
            ]
        ]);
    }
}
