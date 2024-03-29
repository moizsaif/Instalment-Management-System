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
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(VendorsTableSeeder::class);
        $this->call(ProductCategoriesTableSeeder::class);
      // $this->call(ProductBrandsTableSeeder::class);

        Eloquent::unguard();

        $path = 'database/SQL Queries/ims_g_l_voucher_types.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Voucher Types table seeded');

        $path = 'database/SQL Queries/ims_gl_accounts.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Accounts table seeded');

//        $path = 'database/SQL Queries/ims_gl_vouchers.sql';
//        DB::unprepared(file_get_contents($path));
//        $this->command->info('Vouchers table seeded');
//
//        $path = 'database/SQL Queries/ims_gl_voucher_details.sql';
//        DB::unprepared(file_get_contents($path));
//        $this->command->info('Voucher Details table seeded');

        $path = 'database/SQL Queries/ims_brands.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Brand table seeded');

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
