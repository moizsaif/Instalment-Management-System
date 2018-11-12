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
            $table->Integer('no')->unique();
            $table->boolean('status');
            $table->String('received_by');
            $table->String('checked_by')->nullable();
        });
        Schema::create('g_r_ns_details', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->Integer('grn_id')->unsigned();
            $table->Integer('po_id')->unsigned();
            $table->Integer('pr_id')->unsigned();//Not a Foreign Key
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
        Schema::drop('g_r_ns_details');
    }
}
