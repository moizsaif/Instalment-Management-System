<?php

use Illuminate\Database\Seeder;

class GRNsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('g_r_ns')->insert([
            [
                'po_id' => '1',
                'no' => '100',
                'status' => '1',
                'date' => '01-01-2018',
                'accepted_qty' => '10',
                'rejected_qty' => '10',
            ]
        ]);
    }
}
