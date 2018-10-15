<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToGrns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('g_r_ns', function (Blueprint $table) {
            $table->bigInteger('no')->unique();
            $table->boolean('status');
            $table->dateTime('date')->nullable();
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
        Schema::table('g_r_ns', function (Blueprint $table) {
            $table->dropColumn('no');
            $table->dropColumn('status');
            $table->dropColumn('date');
            $table->dropColumn('accepted_qty');
            $table->dropColumn('rejected_qty');
        });
    }
}
