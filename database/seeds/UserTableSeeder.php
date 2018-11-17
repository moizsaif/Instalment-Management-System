<?php

use App\Role;
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
                'contact' => '0333-4442262',
                'cnic' => '3520212369859',
                'address' => 'Lahore, Pakistan'
            ],
            [
                'name' => 'Moiz Saif',
                'email' => 'abdulmoizsaif1@gmail.com',
                'password' => bcrypt('12345'),
                'contact' => '0333-6525635',
                'cnic' => '3520214520365',
                'address' => 'Lahore, Pakistan'
            ],
            [
                'name' => 'Adil Ashfaq',
                'email' => 'adilashfaq877@gmail.com',
                'password' => bcrypt('12345'),
                'contact' => '0323-5258416',
                'cnic' => '3520236521985',
                'address' => 'Lahore, Pakistan'
            ],
            [
                'name' => 'Test',
                'email' => 'test@gmail.com',
                'password' => bcrypt('12345'),
                'contact' => '0333-9581596',
                'cnic' => '3520269845262',
                'address' => 'Lahore, Pakistan'
            ]
        ]);
    }
//    public function run()
//    {
////        $admin      = Role::where('name','Admin');
////        $userR      = Role::where('name','User');
////        $customer   = Role::where('name','Customer');
//
//        $user = new User();
//        $user->name = 'Saad Akmal';
//        $user->email= 'saad.akmal3@gmail.com';
//        $user->password= bcrypt('4942704');
//        $user->save();
//        //$user->roles()->attach($admin);
//
////        $user1 = new User();
////        $user1->name = 'Moiz Saif';
////        $user1->email= 'abdulmoizsaif1@gmail.com';
////        $user1->password= bcrypt('12345');
////        $user1->save();
////        $user1->roles()->attach($userR);
//
////        $user2 = new User();
////        $user2->name = 'Adil Ashfaq';
////        $user2->email= 'adilashfaq877@gmail.com';
////        $user2->password= bcrypt('12345');
////        $user2->save();
////        $user2->roles()->attach($userR);
//
////        $user3 = new User();
////        $user3->name = 'ABC';
////        $user3->email= 'test@gmail.com';
////        $user3->password= bcrypt('12345');
////        $user3->save();
////        $user3->roles()->attach($customer);
//
//    }
}
