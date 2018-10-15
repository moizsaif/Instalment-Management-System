<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableGrn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grns', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('no');
            $table->boolean('status');
            $table->dateTime('date');
            $table->timestamps();
            $table->bigInteger('accepted_qty');
            $table->bigInteger('rejected_qty');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('grns');
    }
}
