<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DefineRelationshipsOnInstallments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('monthly_installments', function (Blueprint $table) {
            $table->foreign('plan_no')
                ->references('id')->on('installment_plans')
                ->onDelete('cascade');
        });
        Schema::table('installment_plans', function (Blueprint $table) {
            $table->foreign('pr_no')
                ->references('id')->on('products')
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
        Schema::table('monthly_installments', function (Blueprint $table) {
            $table->dropForeign(['plan_no']);
        });
        Schema::table('installment_plans', function (Blueprint $table) {
            $table->dropForeign(['pr_no']);
        });
    }
}
