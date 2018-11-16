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
        $this->call(ProductCategoriesTableSeeder::class);


        Eloquent::unguard();
        $path = 'database/SQL Queries/ims_gl_accounts.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Accounts table seeded');

        $path = 'database/SQL Queries/ims_gl_vouchers.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Vouchers table seeded');

        $path = 'database/SQL Queries/ims_gl_voucher_details.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Voucher Details table seeded');

        $path = 'database/SQL Queries/ims_products.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Product table seeded');

        $this->call(PurchaseOrdersTableSeeder::class);
        $this->call(PurchaseOrderDetailsTableSeeder::class);
        $this->call(GRNsTableSeeder::class);
        $this->call(GRNDetailTableSeeder::class);

        Eloquent::unguard();
        $path = 'database/SQL Queries/ims_product_details.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Product Details table seeded');

        $path = 'database/SQL Queries/ims_installment_plans.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Installment Plans table seeded');

        $path = 'database/SQL Queries/ims_monthly_installments.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Monthly Installments table seeded');


    }
}
