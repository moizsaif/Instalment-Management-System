<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->Integer('grn_id')->unsigned();
            $table->string('code','25')->unique();
            $table->boolean('discount');
            $table->char('name');
            $table->string('description')->nullable();
            $table->string('model','25');
            $table->char('color','15');
            $table->integer('warranty')->nullable();
            $table->boolean('warranty_status');
            $table->integer('min_qty');
            $table->integer('max_qty');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('code');
            $table->dropColumn('discount');
            $table->dropColumn('name');
            $table->dropColumn('description');
            $table->dropColumn('model');
            $table->dropColumn('color');
            $table->dropColumn('warranty');
            $table->dropColumn('warranty_status');
            $table->dropColumn('min_qty');
            $table->dropColumn('max_qty');
        });
    }
}
