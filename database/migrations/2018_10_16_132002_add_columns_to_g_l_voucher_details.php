<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToGLVoucherDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('g_l_voucher_details', function (Blueprint $table) {
            $table->double('debit','8','2');
            $table->double('credit','8','2');
            $table->char('cheque_no','20');
            $table->date('cheque_date');
            $table->char('payee','20');
            $table->double('transected_amount','8','2');
            $table->double('provisional_amount','8','2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('g_l_voucher_details', function (Blueprint $table) {
            $table->dropColumn('debit');
            $table->dropColumn('credit');
            $table->dropColumn('cheque_no');
            $table->dropColumn('cheque_date');
            $table->dropColumn('payee');
            $table->dropColumn('transected_amount');
            $table->dropColumn('provisional_amount');
        });
    }
}
