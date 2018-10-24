<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGrnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g_r_ns', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->Integer('po_id')->unsigned()->unique()->nullable();
            $table->Integer('no')->unique();
            $table->boolean('status');
            $table->dateTime('date')->nullable();
            $table->Integer('accepted_qty');
            $table->Integer('rejected_qty');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('g_r_ns');
    }
}
