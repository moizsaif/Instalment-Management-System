<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMonthlyInstallmantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monthly_installments', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('plan_no')->unsigned();
            $table->string('year');
            $table->string('month');
            $table->date('due_date');
            $table->double('amount','8','2');
            $table->double('received_amount','8','2');
            $table->boolean('status')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('monthly_installments');
    }
}
