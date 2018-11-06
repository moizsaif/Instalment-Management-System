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
        $this->call(UserTableSeeder::class);
        $this->call(VendorsTableSeeder::class);
        $this->call(VoucherTypeTableSeeder::class);
        $this->call(VoucherTableSeeder::class);

        Eloquent::unguard();
        $path = 'database/ims_gl_accounts.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Accounts table seeded');

        $this->call(VoucherDetailsTableSeeder::class);

        $this->call(PurchaseOrdersTableSeeder::class);
        $this->call(GRNsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(ProductDetailsTableSeeder::class);

        $this->call(InstallmentPlansTableSeeder::class);
        $this->call(MonthlyInstallmentsTableSeeder::class);



    }
}
