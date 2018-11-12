<?php

use Illuminate\Database\Seeder;

class GRNDetailTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('g_r_ns_details')->insert([
            [
                'po_id' => '1',
                'pr_id' => '1',
                'grn_id' => '1',
                'accepted_qty' => '0',
                'rejected_qty' => '0',
            ]
        ]);
    }
}
