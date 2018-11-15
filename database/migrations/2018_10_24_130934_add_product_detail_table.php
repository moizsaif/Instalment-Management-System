<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProductDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->Integer('pr_id')->unsigned();
            $table->Integer('grn_id')->unsigned();
            $table->integer('qty');
            $table->integer('rem_qty');
            $table->integer('sold_qty');
            $table->integer('warranty')->nullable();
            $table->boolean('warranty_status');
            $table->boolean('discount');
            $table->double('purchase_price', '7', '2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product_details');
    }
}
