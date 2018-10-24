<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInstallmentPlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('installment_plans', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->date('month');
            $table->double('amount','8','2');
            $table->double('received_amount','8','2');
            $table->double('additional_amount','8','2');
            $table->double('total_amount','8','2');
            $table->double('down_payment','8','2');
            $table->integer('total_months');
            $table->integer('paid_months');
            $table->date('start_year');
            $table->date('start_month');
            $table->boolean('approved_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('installment_plans');
    }
}
