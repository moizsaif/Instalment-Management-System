<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Saad Akmal',
                'email' => 'saad.akmal3@gmail.com',
                'password' => bcrypt('4942704'),
            ],
            [
                'name' => 'Moiz Saif',
                'email' => 'abdulmoizsaif1@gmail.com',
                'password' => bcrypt('12345'),
            ],
            [
                'name' => 'Adil Ashfaq',
                'email' => 'adilashfaq877@gmail.com',
                'password' => bcrypt('12345'),
            ]
        ]);
    }
}
