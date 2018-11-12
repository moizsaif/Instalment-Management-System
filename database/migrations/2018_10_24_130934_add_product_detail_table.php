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
            $table->string('description')->nullable();
            $table->string('model','25');
            $table->char('color','15');
            $table->integer('qty');
            $table->integer('warranty')->nullable();
            $table->boolean('warranty_status');
            $table->integer('min_qty');
            $table->integer('max_qty');
            $table->double('purchase_price','7','2');
            $table->double('selling_price','7','2');
            $table->boolean('discount');
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
