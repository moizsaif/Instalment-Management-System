<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToGlVouchers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('g_l_vouchers', function (Blueprint $table) {
            $table->string('code','20');
            $table->integer('type_id')->unsigned()->nullable();
            $table->integer('acc_id')->unsigned()->nullable();
            $table->date('voucher_date');
            $table->date('year');
            $table->date('month');
            $table->double('amount','8','2');
            $table->boolean('is_approved');
            $table->string('created_by','20');
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
            $table->dropColumn('code')->unique();
            $table->dropColumn('voucher_date')->nullable();
            $table->dropColumn('year');
            $table->dropColumn('month');
            $table->dropColumn('amount');
            $table->dropColumn('is_approved');
            $table->dropColumn('created_by');
        });
    }
}
