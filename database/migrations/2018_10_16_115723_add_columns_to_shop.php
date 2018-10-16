<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToShop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shops', function (Blueprint $table) {

            $table->char('name','20');
            $table->integer('contact_no');
            $table->integer('owner_no');
            $table->string('email','30');
            $table->string('address','50');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shops', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('contact_no');
            $table->dropColumn('owner_no');
            $table->dropColumn('email');
            $table->dropColumn('address');
        });
    }
}
