<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGlVoucherDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gl_voucher_details', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('voucher_id')->unsigned();
            $table->integer('acc_id')->unsigned();
            $table->double('debit','8','2');
            $table->double('credit','8','2');
            $table->char('cheque_no','20');
            $table->date('cheque_date');
            $table->char('payee','20');
            $table->char('description', '20');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('gl_voucher_details');
    }
}
