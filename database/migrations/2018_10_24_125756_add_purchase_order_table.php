<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPurchaseOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->Integer('v_id')->unsigned()->nullable();
            $table->Integer('gl_accounts_id')->unsigned()->nullable();
            $table->Integer('grn_id')->unsigned()->nullable();
            $table->Integer('pr_id')->unsigned()->nullable();
            $table->Integer('no')->unique();
            $table->double('amount','9','2');
            $table->Integer('quantity');
            $table->dateTime('date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('purchase_orders');
    }
}
