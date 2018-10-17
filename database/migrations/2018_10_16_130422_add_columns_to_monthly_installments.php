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
            $table->integer('year');
            $table->integer('month');
            $table->date('due_date');
            $table->double('amount','8','2');
            $table->double('received_amount','8','2');
            $table->boolean('status');
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
            $table->dropColumn('year');
            $table->dropColumn('month');
            $table->dropColumn('due_date');
            $table->dropColumn('amount');
            $table->dropColumn('received_amount');
            $table->dropColumn('status');
        });
    }
}
