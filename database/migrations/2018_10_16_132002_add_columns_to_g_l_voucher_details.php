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
            $table->date('invoice_date');
            $table->double('debit','20','2');
            $table->double('credit','20','2');
            $table->string('cheque_no','20');
            $table->date('cheque_date');
            $table->string('payee','20');
            $table->double('transected_amount','20','2');
            $table->double('provisional_amount','20','2');
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
            $table->dropColumn('invoice_date');
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
