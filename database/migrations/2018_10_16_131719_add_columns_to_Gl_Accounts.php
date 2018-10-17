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
            $table->integer('Code');
            $table->string('Description');
            $table->integer('LevelNo');
            $table->boolean('isTransAllow');
            $table->string('Alias');

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
            $table->dropColumn('Code');
            $table->dropColumn('Description');
            $table->dropColumn('LevelNo');
            $table->dropColumn('isTransAllow');
            $table->dropColumn('Alias');

        });
    }
}
