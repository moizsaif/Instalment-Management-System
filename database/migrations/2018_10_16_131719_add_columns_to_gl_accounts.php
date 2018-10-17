<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToGlAccounts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gl_accounts', function (Blueprint $table) {
            $table->string('code','20')->unique();
            $table->string('description')->nullable();
            $table->integer('level_no');
            $table->boolean('is_trans_allowed');
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
        Schema::table('gl_accounts', function (Blueprint $table) {
            $table->dropColumn('code');
            $table->dropColumn('description');
            $table->dropColumn('level_no');
            $table->dropColumn('is_trans_allowed');
            $table->dropColumn('alias');
        });
    }
}
