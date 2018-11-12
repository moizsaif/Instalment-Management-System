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
            $table->Integer('v_id')->unsigned();
            $table->Integer('no')->unique();
            $table->dateTime('due_date')->nullable();
        });
        Schema::create('purchase_order_details', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->Integer('po_id')->unsigned();
            $table->Integer('pr_id')->unsigned();
            $table->double('rate', '9', '2');
            $table->Integer('total_quantity');
            $table->Integer('remaining_quantity')->default(0);
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
        Schema::drop('purchase_order_details');
    }
}
