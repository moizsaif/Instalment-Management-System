<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToMonthlyInstallments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('monthly_installments', function (Blueprint $table) {
            $table->integer('Year');
            $table->integer('Month');
            $table->date('DueDate');
            $table->integer('Amount');
            $table->integer('ReceivedAmount');
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
        Schema::table('monthly_installments', function (Blueprint $table) {
            $table->dropColumn('Year');
            $table->dropColumn('Month');
            $table->dropColumn('DueDate');
            $table->dropColumn('Amount');
            $table->dropColumn('ReceivedAmount');
            $table->dropColumn('Status');
        });
    }
}
