<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGlAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gl_accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('code','20')->unique();
            $table->double('opening_balance','8','2');
            $table->string('description')->nullable();
            $table->integer('level_no');
            $table->boolean('allow_transac')->default(false);
            $table->string('alias','30');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('gl_accounts');
    }
}
