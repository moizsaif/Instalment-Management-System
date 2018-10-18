<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToProductDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_details', function (Blueprint $table) {
            $table->Integer('pr_id')->unsigned();
            $table->Integer('grn_id')->unsigned();
            $table->Integer('v_id')->unsigned();
            $table->integer('qty');
            $table->integer('sold');
            $table->integer('remaining');
            $table->double('purchase_price','7','2');
            $table->double('selling_price','7','2');
            $table->double('discounted_price','7','2')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_details', function (Blueprint $table) {
            $table->dropColumn('qty');
            $table->dropColumn('sold');
            $table->dropColumn('remaining');
            $table->dropColumn('purchase_price');
            $table->dropColumn('selling_price');
            $table->dropColumn('discounted_price');
        });
    }
}
