<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGlVoucherTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g_l_voucher_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->char('code');
            $table->integer('last_serial_no');
            $table->boolean('locked')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('g_l_voucher_types');
    }
}
