<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DefineRelationshipsOnPoGrnPr extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('purchase_orders', function (Blueprint $table) {
            $table->foreign('v_id')
                ->references('id')->on('vendors')
                ->onDelete('cascade');
        });
        Schema::table('g_r_ns', function (Blueprint $table) {
            $table->foreign('po_id')
                ->references('id')->on('purchase_orders')
                ->onDelete('cascade');
        });
        Schema::table('product_details', function (Blueprint $table) {
            $table->foreign('pr_id')
                ->references('id')->on('products')
                ->onDelete('cascade');
            $table->foreign('grn_id')
                ->references('id')->on('g_r_ns')
                ->onDelete('cascade');
            $table->foreign('v_id')
                ->references('id')->on('vendors')
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
        Schema::table('purchase_orders', function (Blueprint $table) {
            $table->dropForeign(['v_id']);
        });
        Schema::table('g_r_ns', function (Blueprint $table) {
            $table->dropForeign(['po_id']);
        });
        Schema::table('product_details', function (Blueprint $table) {
            $table->dropForeign(['pr_id']);
        });
        Schema::table('product_details', function (Blueprint $table) {
            $table->dropForeign(['grn_id']);
        });
        Schema::table('product_details', function (Blueprint $table) {
            $table->dropForeign(['v_id']);
        });
    }
}
