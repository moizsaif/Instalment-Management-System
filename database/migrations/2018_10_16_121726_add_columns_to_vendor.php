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
            $table->char('name','20');
            $table->string('contact_no','20');
            $table->char('cnic','13');
            $table->string('email','30')->nullable();
            $table->string('address');
            $table->string('iban','30')->nullable();
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
            $table->dropColumn('contact_no');
            $table->dropColumn('cnic');
            $table->dropColumn('email');
            $table->dropColumn('address');
            $table->dropColumn('iban');
        });
    }
}
