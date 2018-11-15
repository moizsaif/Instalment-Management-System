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
            $table->integer('type_id')->unsigned();
            $table->string('code','25')->unique();
            $table->char('name');

            $table->string('description')->nullable();
            $table->string('model', '20');
            $table->char('color', '15');
            $table->integer('min_qty');
            $table->integer('max_qty');
            $table->double('selling_price', '7', '2');
            $table->double('discounted_price', '7', '2')->nullable();
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
