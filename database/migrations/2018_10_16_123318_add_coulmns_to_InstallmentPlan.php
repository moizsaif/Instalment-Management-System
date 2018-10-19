<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCoulmnsToInstallmentPlan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('installment_plans', function (Blueprint $table) {
           $table->date('month')->nullable();
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
        Schema::table('installment_plans', function (Blueprint $table) {
            $table->dropColumn('month');
            $table->dropColumn('amount');
            $table->dropColumn('received_amount');
            $table->dropColumn('additional_amount');
            $table->dropColumn('total_amount');
            $table->dropColumn('down_payment');
            $table->dropColumn('total_months');
            $table->dropColumn('paid_months');
            $table->dropColumn('start_year');
            $table->dropColumn('start_month');
            $table->dropColumn('approved_status');
        });
    }
}
