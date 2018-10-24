<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DefineRelationshipsOnAccounts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gl_vouchers', function (Blueprint $table) {
            $table->foreign('type_id')
                ->references('id')->on('g_l_voucher_types')
                ->onDelete('cascade');
        });
        Schema::table('gl_vouchers', function (Blueprint $table) {
            $table->foreign('acc_id')
                ->references('id')->on('gl_accounts')
                ->onDelete('cascade');
        });
        Schema::table('gl_voucher_details', function (Blueprint $table) {
            $table->foreign('voucher_no')
                ->references('id')->on('gl_vouchers')
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
        Schema::table('gl_vouchers', function (Blueprint $table) {
            $table->dropForeign(['type_id']);
        });
        Schema::table('gl_vouchers', function (Blueprint $table) {
            $table->dropForeign(['acc_id']);
        });
     Schema::table('gl_voucher_details', function (Blueprint $table) {
         $table->dropForeign(['voucher_no']);
     });
    }
}
