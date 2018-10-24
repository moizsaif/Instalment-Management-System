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
            $table->Integer('pr_id')->unsigned()->nullable();
            $table->Integer('grn_id')->unsigned()->nullable();
            $table->Integer('v_id')->unsigned()->nullable();
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
        Schema::drop('product_details');
    }
}
