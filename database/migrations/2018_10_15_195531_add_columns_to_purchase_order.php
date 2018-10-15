<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToPurchaseOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('purchase_orders', function (Blueprint $table) {
            $table->bigInteger('no')->unique();
            $table->double('amount','9','2');
            $table->bigInteger('quantity');
            $table->dateTime('date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('purchase_orders', function (Blueprint $table) {
            $table->dropColumn('no');
            $table->dropColumn('amount');
            $table->dropColumn('quantity');
            $table->dropColumn('date');
        });
    }
}
