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
            $table->string('code','25');
            $table->boolean('discount');
            $table->string('name');
            $table->string('description');
            $table->string('model','25');
            $table->string('color','15');
            $table->integer('warranty');
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
