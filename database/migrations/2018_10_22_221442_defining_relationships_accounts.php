<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DefiningRelationshipsAccounts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('g_l_vouchers', function (Blueprint $table) {
            $table->foreign('type_id')
                ->references('id')->on('g_l_voucher_types')
                ->onDelete('cascade');
        });
        Schema::table('g_l_vouchers', function (Blueprint $table) {
            $table->foreign('acc_id')
                ->references('id')->on('gl_accounts')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('g_l_vouchers', function (Blueprint $table) {
            $table->dropForeign(['type_id']);
        });
        Schema::table('g_l_vouchers', function (Blueprint $table) {
            $table->dropForeign(['acc_id']);
        });
    }
}
