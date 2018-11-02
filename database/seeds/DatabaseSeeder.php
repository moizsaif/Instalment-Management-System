<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(VendorsTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(VoucherTypeTableSeeder::class);
        $this->call(VoucherTableSeeder::class);

        $this->call(PurchaseOrdersTableSeeder::class);
        $this->call(GRNsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(ProductDetailsTableSeeder::class);

        $this->call(InstallmentPlansTableSeeder::class);
        $this->call(MonthlyInstallmentsTableSeeder::class);



    }
}
