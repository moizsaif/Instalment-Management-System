<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGlVoucherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gl_vouchers', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('code','20')->unique();
            $table->integer('type_id')->unsigned()->nullable();
            $table->date('voucher_date');
            $table->integer('year');
            $table->string('month');
            $table->double('amount','8','2');
            $table->boolean('is_approved')->nullable()->default(false);
            $table->string('created_by','20');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('gl_vouchers');
    }
}
