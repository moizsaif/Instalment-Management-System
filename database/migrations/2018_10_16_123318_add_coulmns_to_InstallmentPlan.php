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
           $table->integer('month');
           $table->integer('year');
           $table->integer('amount');
           $table->integer('ReceivedAmount');
           $table->integer('AdditionalAmount');
           $table->integer('TotalAmount');
           $table->integer('DownPayment');
           $table->integer('TotalMonths');
           $table->date('StartYear');
           $table->date('StartMonth');
           $table->boolean('Status');



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
            $table->dropColumn('year');
            $table->dropColumn('amount');
            $table->dropColumn('ReceivedAmount');
            $table->dropColumn('AdditionalAmount');
            $table->dropColumn('ReceivedAmount');
            $table->dropColumn('TotalAmount');
            $table->dropColumn('DownPayment');
            $table->dropColumn('TotalMonths');
            $table->dropColumn('StartYear');
            $table->dropColumn('StartMonth');
            $table->dropColumn('Status');

        });
    }
}
