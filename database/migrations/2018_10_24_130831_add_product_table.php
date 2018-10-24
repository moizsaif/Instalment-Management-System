<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->Integer('grn_id')->unsigned()->nullable();
            $table->string('code','25')->unique();
            $table->boolean('discount');
            $table->char('name');
            $table->string('description')->nullable();
            $table->string('model','25');
            $table->char('color','15');
            $table->integer('warranty')->nullable();
            $table->boolean('warranty_status');
            $table->integer('min_qty');
            $table->integer('max_qty');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
