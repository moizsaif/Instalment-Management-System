<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToVendor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vendors', function (Blueprint $table) {
            $table->string('name','20');
            $table->string('contact','20');
            $table->string('owner','20');
            $table->string('email','30');
            $table->string('address','50');
            $table->string('iban','30' );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vendors', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('contact');
            $table->dropColumn('owner');
            $table->dropColumn('email');
            $table->dropColumn('address');
            $table->dropColumn('iban');
        });
    }
}
